<?php
include '../model/pdo.php';

function getMonthlyRevenue() {
    try {
        $conn = pdo_get_connection();

        $sql_loai_phong = "SELECT id_loaiphong, ten_LP FROM loai_phong";
        $loai_phongs = pdo_query($sql_loai_phong);

        $data = array();

        foreach ($loai_phongs as $loai_phong) {
            $id_loaiphong = $loai_phong['id_loaiphong'];
            $ten_loai_phong = $loai_phong['ten_LP'];

            $sql = "SELECT MONTH(ngay_dat) as thang,
                           SUM(CASE WHEN dp.id_loaiphong = ? THEN dp.thanh_tien ELSE 0 END) as '$ten_loai_phong'
                    FROM dat_phong dp
                    WHERE YEAR(ngay_dat) = 2023
                    GROUP BY MONTH(ngay_dat)";

            $result = pdo_query($conn, $sql, $id_loaiphong);

            foreach ($result as $row) {
                $data[] = $row;
            }
        }

        return $data;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

try {
    $revenueData = getMonthlyRevenue();
    echo json_encode($revenueData);
} catch (PDOException $e) {
    // Handle PDOException
    echo "Error: " . $e->getMessage();
}
?>
