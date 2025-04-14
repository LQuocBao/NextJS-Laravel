<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Xóa dữ liệu cũ trước khi chạy seeder

        DB::table('products')->insert([
            [
                "name" => "Laptop gaming MSI Titan 18 HX AI A2XWJG 035VN",
                "slug" => "laptop-gaming-msi-titan-18-hx-ai-a2xwjg-035vn",
                "image" => "laptop-gaming-msi-titan-18-hx-ai-a2xwjg-035vn.jpg",
                "price" => 179990000,
                "sale_price" => 169990000,
                "short_description" => "- MSI Titan 18 HX AI A2XWJG 035VN là chiếc laptop gaming cao cấp với cấu hình mạnh mẽ và thiết kế ấn tượng. Máy được trang bị bộ vi xử lý Intel® Core™ Ultra 9 285HX mới nhất, cùng card đồ họa NVIDIA® GeForce RTX™ 5090 Laptop GPU 24GB GDDR7, mang lại hiệu suất vượt trội cho các tựa game nặng và ứng dụng đồ họa chuyên sâu. 
                                        - Màn hình 18 inch UHD+ (3840x2400) sử dụng công nghệ MiniLED với tần số quét 120Hz, đảm bảo hình ảnh sắc nét và màu sắc sống động. 
                                        - Với dung lượng RAM lên đến 96GB DDR5-6400MHz và bộ nhớ trong 6TB SSD PCIe, máy hỗ trợ đa nhiệm mượt mà và cung cấp không gian lưu trữ rộng rãi cho dữ liệu và trò chơi.
                                        - Thiết kế vỏ kim loại màu đen sang trọng, cùng hệ thống tản nhiệt tiên tiến, giúp máy hoạt động ổn định và bền bỉ trong thời gian dài.",
                "description" => 'Thông số kĩ thuật:
                                    CPU	Intel® Core™ Ultra 9 285HX 24 nhân 24 luồng (Max turbo 5.5GHz)
                                    RAM	96GB (2 x 48GB) DDR5 6400MHz 
                                    Ổ cứng	6TB NVMe PCIe (1 x NVMe M.2 SSD by PCIe Gen5 x4 + 3 x NVMe M.2 SSD by PCIe Gen4 x4)
                                    VGA	NVIDIA® GeForce RTX™ 5090 Laptop GPU 24GB GDDR7
                                    Màn hình	18" UHD+ (3840x2400), 16:10, MiniLED, 120Hz Refresh Rate, 100% DCI-P3 (Typ.), VESA DisplayHDR™ 1000 Certified, IPS-Level panel
                                    Cổng giao tiếp	2 x Thunderbolt™ 5 (DisplayPort™/ Power Delivery 3.1)
                                    3 x USB 3.2 Gen2 Type-A
                                    1 x HDMI™ 2.1 (8K@60Hz / 4K@120Hz)
                                    1 x SD Express Memory Card Reader
                                    1 x Audio combo jack
                                    Bàn phím	Cherry Mechanical Per-Key RGB gaming keyboard by SteelSeries with Copilot Key
                                    Audio	6 Speaker designed by Dynaudio system (4 x 2W Speakers + 2 x 2W Woofers)
                                    Chuẩn LAN	Gigabit Ethernet (up to 2.5GbE)
                                    Chuẩn WIFI	Intel® Killer™ Wi-Fi 7 BE1750
                                    Bluetooth	v5.4
                                    Webcam	IR FHD type (30fps@1080p) with HDR & 3D Noise Reduction+ (3DNR+)
                                    Hệ điều hành	Windows 11 Home
                                    Pin	4 cell, 99.99Whr
                                    Trọng lượng	3.6 kg
                                    Màu sắc	Core Black
                                    Kích thước	404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 1,
            ],
            [
                "name" => "Laptop gaming Acer Predator Helios 18 PH18 73 98AQ",
                "slug" => "laptop-gaming-acer-predator-helios-18-ph18-73-98aq",
                "image" => "laptop-gaming-acer-predator-helios-18-ph18-73-98aq.jpg",
                "price" => 149990000,
                "sale_price" => 139990000,
                "short_description" => " -Laptop gaming Acer Predator Helios 18 PH18-73- 98aq",
                "description" => 'Thông số kĩ thuật:
                                    CPU    AMD Ryzen 5 3600 6-Core 12-Thread (Max Turbo 3.8GHz)
                                    RAM    16GB (4 x 4GB) DDR4 3200MHz 
                                    Ổ cứng    512GB PCIe NVMe M.2 SSD
                                    VGA    AMD Radeon
                                    Màn hình    Full HD (1920x1080), 16:9, 100% IPS, 144Hz (Refresh Rate)
                                    C��ng giao tiếp    2 x Thunderbolt 3 (DisplayPort 1.4, HDMI 2.1, USB 3.1 Type-C)
                                    1 x USB 3.2 Gen2 Type-A
                                    1 x USB 3.2 Gen1 Type-A
                                    1 x HDMI 2.1 (8K@60Hz / 4K@120Hz)
                                    1 x SD Express Memory Card Reader
                                    1 x Audio combo jack
                                    Bàn phím    RGB Backlit Keyboard
                                    Audio    6 Speaker designed by Dynaudio system (4 x 2W Speakers + 2 x 2W Woofers)
                                    Chuẩn LAN    Gigabit Ethernet (up to 2.5GbE)
                                    Chuẩn WIFI    Intel® Killer™ Wi-Fi 7 BE1750
                                    Bluetooth    v5.4
                                    Webcam    IR FHD type (30fps@1080p) with HDR & 3D Noise Reduction+ (3DNR+)
                                    Hệ điều hành    Windows 11 Home
                                    Pin    4 cell, 99.99Whr
                                    Trọng lượng    3.6 kg
                                    Màu sắc    Core Black
                                    Kích thước    404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 1,
            ],
            [
                "name" => "Laptop gaming ASUS ROG Strix SCAR 16 G634JYR RA132W",
                "slug" => "laptop-gaming-asus-rog-strix-scar-16-g634jyr-ra132w",
                "image" => "laptop-gaming-asus-rog-strix-scar-16-g634jyr-ra132w.jpg",
                "price" => 117990000,
                "sale_price" => 109900000,
                "short_description" => "- Laptop gaming ASUS ROG Strix SCAR 16 G634JYR RA132W là một trong những sản phẩm cao cấp nhất của ASUS, được thiết kế dành riêng cho game thủ chuyên nghiệp và những người đam mê công nghệ.",
                "description" => 'Thông số kĩ thuật:
                                    CPU    AMD Ryzen 7 5800X 8-Core 16-Thread (Max Turbo 3.9GHz)
                                    RAM    16GB (4 x 4GB) DDR4 3200MHz 
                                    Ổ cứng    512GB PCIe NVMe M.2 SSD
                                    VGA    NVIDIA GeForce
                                        Màn hình    Full HD (1920x1080), 16:9, 100% IPS, 144Hz (Refresh Rate)
                                    Cổng giao tiếp    2 x Thunderbolt 3 (DisplayPort 1.4, HDMI 2.1, USB 3.1 Type-C)
                                    1 x USB 3.2 Gen2 Type-A
                                    1 x USB 3.2 Gen1 Type-A
                                    1 x HDMI 2.1 (8K@60Hz / 4K@120Hz)
                                    1 x SD Express Memory Card Reader
                                    1 x Audio combo jack
                                    Bàn phím    RGB Backlit Keyboard
                                    Audio    6 Speaker designed by Dynaudio system (4 x 2W Speakers + 2 x 2W Woofers)
                                    Chuẩn LAN    Gigabit Ethernet (up to 2.5GbE)
                                    Chuẩn WIFI    Intel® Killer™ Wi-Fi 7 BE1750
                                    Bluetooth    v5.4
                                    Webcam    IR FHD type (30fps@1080p) with HDR & 3D Noise Reduction+ (3DNR+)
                                    Hệ điều hành    Windows 11 Home
                                    Pin    4 cell, 99.99Whr
                                    Trọng lượng    3.6 kg
                                    Màu sắc    Core Black
                                    Kích thước    404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 1,
            ],
            [
                "name" => "PC GVN AMD R7-7700X/ RTX 4060",
                "slug" => "pc-gvn-amd-r7-7700x-rtx-4060",
                "image" => "pc-gvn-amd-r7-7700x-rtx-4060.jpg",
                "price" => 33210000,
                "sale_price" => 30990000,
                "short_description" => "- PC GVN AMD R7-7700X/ RTX 4060 là một trong những sản phẩm máy tính để bàn cao cấp nhất của GVN, được thiết kế dành riêng cho game thủ chuyên nghiệp và những người đam mê công nghệ.",
                "description" => 'Thông số kĩ thuật:
                                    CPU    AMD Ryzen 7 7700X 8-Core 16-Thread (Max Turbo 4.2GHz)
                                    RAM    16GB (4 x 4GB) DDR4 3200MHz 
                                    Ổ cứng    512GB PCIe NVMe M.2 SSD
                                    VGA    NVIDIA GeForce

                                    Màn hình    Full HD (1920x1080), 16:9,
                                    100% IPS, 144Hz (Refresh Rate)

                                    Cổng giao tiếp    2 x Thunderbolt 3 (DisplayPort 1.4, HDMI 2.1, USB 3.1 Type-C)
                                    1 x USB 3.2 Gen2 Type-A
                                    1 x USB 3.2 Gen1 Type-A
                                    1 x HDMI 2.1 (8K@60Hz / 4K@120Hz)
                                    1 x SD Express Memory Card Reader
                                    1 x Audio combo jack
                                    Bàn phím    RGB Backlit Keyboard
                                    Audio    6 Speaker designed by Dynaudio system (4 x 2W Speakers + 2 x 2W Woofers)
                                    Chuẩn LAN    Gigabit Ethernet (up to 2.5GbE)
                                    Chuẩn WIFI    Intel® Killer™ Wi-Fi 7 BE1750
                                    Bluetooth    v5.4
                                    Webcam    IR FHD type (30fps@1080p) with HDR & 3D Noise Reduction+ (3DNR+)
                                    Hệ điều hành    Windows 11 Home
                                    Pin    4 cell, 99.99Whr
                                    Trọng lượng    3.6 kg
                                    Màu sắc    Core Black
                                    Kích thước    404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 2,
            ],
            [
                "name" => "PC GVN Intel i5-12400F/ VGA RTX 4060",
                "slug" => "pc-gvn-intel-i5-12400f-vga-rtx-4060",
                "image" => "pc-gvn-intel-i5-12400f-vga-rtx-4060.jpg",
                "price" => 29570000,
                "sale_price" => 26990000,
                "short_description" => "- PC GVN Intel i5-12400F/ VGA RTX 4060 là một trong những sản phẩm máy tính để bàn cao cấp nhất của GVN, được thiết kế dành riêng cho game thủ chuyên nghiệp và những người đam mê công nghệ.",
                "description" => 'Thông số kĩ thuật:
                CPU    Intel Core i5-12400F 6-Core 12-Thread (Max
                Turbo 4.4GHz)
                RAM    16GB (4 x 4GB) DDR4 3200MHz
                Ổ cứng    512GB PCIe NVMe M.2 SSD
                VGA    NVIDIA GeForce
                Màn hình    Full HD (1920x1080), 16:9,
                100% IPS, 144Hz (Refresh Rate)
                C��ng giao tiếp    2 x Thunderbolt 3 (DisplayPort 1.4, HDMI 2.1, USB 3.1 Type-C)
                1 x USB 3.2 Gen2 Type-A
                1 x USB 3.2 Gen1 Type-A
                1 x HDMI 2.1 (8K@60Hz / 4K@120Hz)
                1 x SD Express Memory Card Reader   
                1 x Audio combo jack
                Bàn phím    RGB Backlit Keyboard
                Audio    6 Speaker designed by Dynaudio system (4 x 2W Speakers + 2 x 2W Woofers)
                Chuẩn LAN    Gigabit Ethernet (up to 2.5GbE)
                Chuẩn WIFI    Intel® Killer™ Wi-Fi 7 BE1750
                Bluetooth    v5.4
                Webcam    IR FHD type (30fps@1080p) with HDR & 3D Noise Reduction+ (3DNR+)
                Hệ điều hành    Windows 11 Home
                Pin    4 cell, 99.99Whr
                Trọng lượng    3.6 kg
                Màu sắc    Core Black
                Kích thước    404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 2,
            ],
            [
                "name" => "PC GVN AMD R5-7600/ VGA RTX 4060",
                "slug" => "pc-gvn-amd-r5-7600-vga-rtx-4060",
                "image" => "pc-gvn-amd-r5-7600-vga-rtx-4060.jpg",
                "price" => 24840000,
                "sale_price" => 22990000,
                "short_description" => "- PC GVN AMD R5-7600/ VGA RTX 4060 là một trong những sản phẩm máy tính để bàn cao cấp nhất của GVN, được thiết kế dành riêng cho game thủ chuyên nghiệp và những người đam mê công nghệ.",
                "description" => 'Thông số kĩ thuật:
                CPU    AMD Ryzen 5 7600 6-Core 12-Thread (Max Turbo 4.1GHz)
                RAM    16GB (4 x 4GB) DDR4 3200MHz
                Ổ cứng    512GB PCIe NVMe M.2 SSD
                VGA    NVIDIA GeForce
                Màn hình    Full HD (1920x1080), 16:9,
                100% IPS, 144Hz (Refresh Rate)
                C��ng giao tiếp    2 x Thunderbolt 3 (DisplayPort 1.
                4, HDMI 2.1, USB 3.1 Type-C)
                1 x USB 3.2 Gen2 Type-A
                1 x USB 3.2 Gen1 Type-A
                1 x HDMI 2.1 (8K@60Hz / 4K@120Hz)
                1 x SD Express Memory Card Reader
                1 x Audio combo jack
                Bàn phím    RGB Backlit Keyboard
                Audio    6 Speaker designed by Dynaudio system (4 x 2W Speakers + 2 x 2W Woofers)
                Chuẩn LAN    Gigabit Ethernet (up to 2.5GbE)
                Chuẩn WIFI    Intel® Killer™ Wi-Fi 7 BE1750
                Bluetooth    v5.4
                Webcam    IR FHD type (30fps@1080p) with HDR & 3D Noise Reduction+ (3DNR+)
                Hệ điều hành    Windows 11 Home
                Pin    4 cell, 99.99Whr
                Trọng lượng    3.6 kg
                Màu sắc    Core Black
                Kích thước    404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 2,
            ],
            [
                "name" => "Màn hình cong MSI MPG 491CQPX QD-OLED 49' QD-OLED 2K 240Hz USBC chuyên game",
                "slug" => "man-hinh-cong-msi-mpg-491cqx",
                "image" => "man-hinh-cong-msi-mpg-491cqx.jpg",
                "price" => 39990000,
                "sale_price" => 36990000,
                "short_description" => "- Màn hình cong MSI MPG 491CQPX QD OLED 49' QD-OLED 2K 240Hz USBC chuyên gam
                - Màn hình cong 49 inch, độ phân giải 2K, tốc độ quét 240Hz, thời gian phản hồi 0.1ms
                - Công nghệ QD-OLED cho màu sắc sống động và độ tương phản cao",
                "description" => 'Thông số kĩ thuật:
                Màn hình    MSI MPG 491CQPX QD-OLED 49"
                Chipset    NVIDIA GeForce GTX 1660 Ti
                RAM    8GB GDDR5X 2666MHz
                Ổ cứng    1TB SSD M.2 NVMe
                Công nghệ QD-O
                LED    QD-OLED
                Độ phân giải    2K (2560 x 1440)
                Tốc độ làm tươi    240Hz
                Thời gian phản hồi    0.1ms
                Tỉ lệ khung hình    32:9
                Độ sáng tối đa    1000 nits
                Độ tương phản    1000000:1
                Góc nhìn    178 độ
                Cổng kết nối    2 x HDMI 2.0
                1 x DisplayPort 1.4
                1 x USB-C
                2 x USB 3.0
                1 x USB-B
                1 x Audio out
                Tính năng đặc biệt    Công nghệ FreeSync Premium Pro
                Tích hợp loa    2 x 5W
                Kích thước    1156 x 392 x 270 mm
                Trọng lượng    12.5 kg
                Màu sắc    Đen
                Kích thước    404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 3,
            ],
            [
                "name" => "Màn hình Acer KG240Y-X1 24' IPS 200Hz Gsync chuyên game",
                "slug" => "man-hinh-acer-kg240y-x1",
                "image" => "man-hinh-acer-kg240y-x1.jpg",
                "price" => 39990000,
                "sale_price" => 36990000,
                "short_description" => "- Màn hình Acer KG240Y X1 24 IPS 
                - Độ phân giải Full HD 1080p
                - Tốc độ làm tươi 200Hz, thời gian phản hồi 1ms
                - Công nghệ G-Sync giúp giảm hiện tượng xé hình và giật lag trong game",
                "description" => 'Thông số kĩ thuật:
                Màn hình    Acer KG240Y X1 24 IPS
                Chipset    NVIDIA GeForce GTX 1660 Ti
                RAM    8GB GDDR5X 2666MHz
                Ổ cứng    1TB SSD M.2 NV
                Công nghệ    IPS
                Độ phân giải    Full HD (1920 x 1080)
                Tốc độ làm tươi    200Hz
                Thời gian phản hồi    1ms
                Tỉ lệ khung hình    16:9
                Độ sáng tối đa    400 nits
                Độ tương phản    1000:1
                Góc nhìn    178 độ
                Cổng kết nối    1 x HDMI 2.0
                1 x DisplayPort 1.2
                1 x USB 3.0
                1 x USB-B
                1 x Audio out
                Tính năng đặc biệt    Công nghệ G-Sync
                Tích hợp loa    2 x 5W
                Kích thước    540 x 400 x 200 mm
                Trọng lượng    5.5 kg
                Màu sắc    Đen
                Kích thước    404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 3,
            ],
            [
                "name" => "Màn hình Lenovo L24i-4A 24' IPS 100Hz",
                "slug" => "man-hinh-lenovo-l24i-4a",
                "image" => "man-hinh-lenovo-l24i-4a.jpg",
                "price" => 39990000,
                "sale_price" => 36990000,
                "short_description" => "- Màn hình Lenovo L24i-4A 24 IPS 100Hz
                - Độ phân giải Full HD 1080p
                - Tốc độ làm tươi 100Hz, thời gian phản hồi 1ms
                - Công nghệ IPS giúp giảm hiện tượng xé
                - Công nghệ FreeSync giúp giảm hiện tượng xé hình và giật lag trong game",
                "description" => 'Thông số kĩ thuật:
                Màn hình    Lenovo L24i-4A 24 IPS
                Chipset    Intel Core i7-10750H
                RAM    16GB DDR4 2666MHz
                Ổ cứng    1TB SSD M.2 NVMe
                Công nghệ    IPS
                Độ phân giải    Full HD (1920 x 1080)
                Tốc độ làm tươi    100Hz
                Thời gian phản hồi    1ms
                Tỉ lệ khung hình    16:9
                Độ sáng tối đa    300 nits
                Độ tương phản    1000:1
                Góc nhìn    178 độ
                Cổng kết nối    1 x HDMI 1.4
                1 x DisplayPort 1.2
                1 x USB 3.0
                1 x USB-B
                1 x Audio out
                Tính năng đặc biệt    Công nghệ FreeSync
                Tích hợp loa    2 x 5W
                Kích thước    540 x 400 x 200 mm
                Trọng lượng    5.5 kg
                Màu sắc    Đen
                Kích thước    404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 3,
            ],
            [
                "name" => "Bo mạch chủ ASUS ROG MAXIMUS Z890 EXTREME (DDR5)",
                "slug" => "bo-mach-chu-asus-rog-maximus-z890-extreme-ddr5",
                "image" => "bo-mach-chu-asus-rog-maximus-z890-extreme-ddr5.jpg",
                "price" => 39990000,
                "sale_price" => 36990000,
                "short_description" => "- Bo mạch chủ ASUS ROG MAXIMUS Z890 EXTREME (DDR5) là một trong những sản phẩm cao cấp nhất của ASUS, được thiết kế dành riêng cho game thủ chuyên nghiệp và những người đam mê công nghệ.",
                "description" => 'Thông số kĩ thuật:
                Bo mạch chủ    ASUS ROG MAXIMUS Z890 EXTREME
                Chipset    AMD Ryzen 7 5800X
                RAM    8GB DDR5 4600MHz
                Ổ cứng    256GB SSD M.2 NV
                Công nghệ    DDR5
                Độ phân giải    4K (3840 x 2160)
                Tốc độ làm tươi    240Hz
                Thời gian phản hồi    1ms
                Tỉ lệ khung hình    16:9
                Độ sáng tối đa    1000 nits
                Độ tương phản    1000000:1
                Góc nhìn    178 độ
                Cổng kết nối    1 x HDMI 2.0
                1 x DisplayPort 1.4
                1 x USB 3.0
                1 x USB-B
                1 x Audio out
                Tính năng đặc biệt    Công nghệ FreeSync
                Tích hợp loa    2 x 5W
                Kích thước    540 x 400 x 200 mm
                Trọng lượng    5.5 kg
                Màu sắc    Đen
                Kích thước    404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 4,
            ],
            [
                "name" => "Bo mạch chủ Asrock Z890 Taichi AQUA (DDR5)",
                "slug" => "bo-mach-chu-asrock-z890-taichi-aqua-ddr5",
                "image" => "bo-mach-chu-asrock-z890-taichi-aqua-ddr5.jpg",
                "price" => 39990000,
                "sale_price" => 36990000,
                "short_description" => "- Bo mạch chủ Asrock Z890 Taichi AQUA (DDR5) là một trong những sản phẩm cao cấp nhất của ASUS, được thiết kế dành riêng cho game thủ chuyên nghiệp và những người đam mê công nghệ.",
                "description" => 'Thông số kĩ thuật:
                Bo mạch chủ    ASRock Z890 Taichi AQUA
                Chipset    AMD Ryzen 7 5800X
                RAM    8GB DDR5 4600MHz
                Ổ cứng    256GB SSD M.2
                Công nghệ    DDR5
                Độ phân giải    4K (3840 x 2160)
                Tốc độ làm tươi    240Hz
                Thời gian phản hồi    1ms
                Tỉ lệ khung hình    16:9
                Độ sáng tối đa    1000 nits
                Độ tương phản    1000000:1
                Góc nhìn    178 độ
                Cổng kết nối    1 x HDMI 2.0
                1 x DisplayPort 1.4
                1 x USB 3.0
                1 x USB-B
                1 x Audio out
                Tính năng đặc biệt    Công nghệ FreeSync
                Tích hợp loa    2 x 5W
                Kích thước    540 x 400 x 200 mm
                Trọng lượng    5.5 kg
                Màu sắc    Đen
                Kích thước    404 (W) x 307.5 (D) x 24~32.05 (H) mm',
                "quantity" => 5,
                "category_id" => 4,
            ],
        ]);
    }
}
