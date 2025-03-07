CREATE TABLE products(
    ID INTEGER PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255) NOT NULL,
    Information VARCHAR(255) NOT NULL,
    Image  VARCHAR(255) NOT NULL,
    Price VARCHAR(255) NOT NULL,
    CategoryID INTEGER NOT NULL
);

INSERT INTO products(Name, Information, Image, CategoryID) 
VALUES ( "Laptop Macbook (Core 2 Duo T6603/1GHz)Ram 2G/Hdd 500GB",
"Bộ xử lý Công nghệ CPU Intel Core i5 Alder Lake - 1240P Số nhân 12 Số luồng 16 Tốc độ CPU 1.70 GHz Tốc độ tối đa Turbo Boost 4.4 GHz Bộ nhớ đệm 12 MB Bộ nhớ RAM, Ổ cứng RAM 16 GB Loại RAM DDR5 2 khe (1 khe 8 GB onboard + 1 khe 8 GB) Tốc độ Bus RAM 4800 MHz Hỗ trợ RAM tối đa 40 GB Ổ cứng 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1 TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1 TB) Màn hình Màn hình 14 inch Độ phân giải Full HD (1920 x 1080) Tần số quét 60 Hz Công nghệ màn hình Màn hình Wide View Tấm nền IPS Chống chói Anti Glare LED Backlit 100% sRGB 400 nits Đồ họa và Âm thanh Card màn hình Card tích hợp - Intel Iris Xe Graphics Công nghệ âm thanh Dolby Atmos Cổng kết nối & tính năng mở rộng Cổng giao tiếp 2 x Thunderbolt 4 hỗ trợ display / power delivery 1 x USB 2.0 Jack tai nghe 3.5 mm 1 x USB 3.2 HDMI LAN (RJ45) Kết nối không dây Bluetooth 5.2Wi-Fi 6E (802.11ax) Khe đọc thẻ nhớ Micro SD Webcam Full HD WebcamCamera IR Đèn bàn phím Có Tính năng khác TPM 2.0 Độ bền chuẩn quân đội MIL STD 810H Bản lề mở 180 độ Bảo mật vân tay Công tắc khóa camera Numberpad Mở khóa khuôn mặt Kích thước & trọng lượng Kích thước, khối lượng Dài 323.4 mm - Rộng 223.1 mm - Dày 18 mm - Nặng 1.25 kg Chất liệu Vỏ kim loại - chiếu nghỉ tay Nhôm Magie Thông tin khác Thông tin Pin 3-cell Li-ion, 63 Wh Hệ điều hành Windows 11 Home SL Thời điểm ra mắt 2022",
"http://localhost/Website-laptop/images/macbook.jpg",
"12.345.678đ",
1);
INSERT INTO products(Name, Information, Image, CategoryID) 
VALUES ( "Laptop Dell (Core 4 Duo T123/3GHz)Ram 4G/SSD 500GB",
"Bộ xử lý Công nghệ CPU Intel Core i5 Alder Lake - 1240P Số nhân 12 Số luồng 16 Tốc độ CPU 1.70 GHz Tốc độ tối đa Turbo Boost 4.4 GHz Bộ nhớ đệm 12 MB Bộ nhớ RAM, Ổ cứng RAM 16 GB Loại RAM DDR5 2 khe (1 khe 8 GB onboard + 1 khe 8 GB) Tốc độ Bus RAM 4800 MHz Hỗ trợ RAM tối đa 40 GB Ổ cứng 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1 TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1 TB) Màn hình Màn hình 14 inch Độ phân giải Full HD (1920 x 1080) Tần số quét 60 Hz Công nghệ màn hình Màn hình Wide View Tấm nền IPS Chống chói Anti Glare LED Backlit 100% sRGB 400 nits Đồ họa và Âm thanh Card màn hình Card tích hợp - Intel Iris Xe Graphics Công nghệ âm thanh Dolby Atmos Cổng kết nối & tính năng mở rộng Cổng giao tiếp 2 x Thunderbolt 4 hỗ trợ display / power delivery 1 x USB 2.0 Jack tai nghe 3.5 mm 1 x USB 3.2 HDMI LAN (RJ45) Kết nối không dây Bluetooth 5.2Wi-Fi 6E (802.11ax) Khe đọc thẻ nhớ Micro SD Webcam Full HD WebcamCamera IR Đèn bàn phím Có Tính năng khác TPM 2.0 Độ bền chuẩn quân đội MIL STD 810H Bản lề mở 180 độ Bảo mật vân tay Công tắc khóa camera Numberpad Mở khóa khuôn mặt Kích thước & trọng lượng Kích thước, khối lượng Dài 323.4 mm - Rộng 223.1 mm - Dày 18 mm - Nặng 1.25 kg Chất liệu Vỏ kim loại - chiếu nghỉ tay Nhôm Magie Thông tin khác Thông tin Pin 3-cell Li-ion, 63 Wh Hệ điều hành Windows 11 Home SL Thời điểm ra mắt 2022",
"http://localhost/Website-laptop/images/laptop-dell.jpg",
"98.765.432đ",
2);
INSERT INTO products(Name, Information, Image, CategoryID) 
VALUES ( "Laptop Asus (Core 1 Duo T125438GHz)Ram 7G/Hdd 500GB",
"Bộ xử lý Công nghệ CPU Intel Core i5 Alder Lake - 1240P Số nhân 12 Số luồng 16 Tốc độ CPU 1.70 GHz Tốc độ tối đa Turbo Boost 4.4 GHz Bộ nhớ đệm 12 MB Bộ nhớ RAM, Ổ cứng RAM 16 GB Loại RAM DDR5 2 khe (1 khe 8 GB onboard + 1 khe 8 GB) Tốc độ Bus RAM 4800 MHz Hỗ trợ RAM tối đa 40 GB Ổ cứng 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1 TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1 TB) Màn hình Màn hình 14 inch Độ phân giải Full HD (1920 x 1080) Tần số quét 60 Hz Công nghệ màn hình Màn hình Wide View Tấm nền IPS Chống chói Anti Glare LED Backlit 100% sRGB 400 nits Đồ họa và Âm thanh Card màn hình Card tích hợp - Intel Iris Xe Graphics Công nghệ âm thanh Dolby Atmos Cổng kết nối & tính năng mở rộng Cổng giao tiếp 2 x Thunderbolt 4 hỗ trợ display / power delivery 1 x USB 2.0 Jack tai nghe 3.5 mm 1 x USB 3.2 HDMI LAN (RJ45) Kết nối không dây Bluetooth 5.2Wi-Fi 6E (802.11ax) Khe đọc thẻ nhớ Micro SD Webcam Full HD WebcamCamera IR Đèn bàn phím Có Tính năng khác TPM 2.0 Độ bền chuẩn quân đội MIL STD 810H Bản lề mở 180 độ Bảo mật vân tay Công tắc khóa camera Numberpad Mở khóa khuôn mặt Kích thước & trọng lượng Kích thước, khối lượng Dài 323.4 mm - Rộng 223.1 mm - Dày 18 mm - Nặng 1.25 kg Chất liệu Vỏ kim loại - chiếu nghỉ tay Nhôm Magie Thông tin khác Thông tin Pin 3-cell Li-ion, 63 Wh Hệ điều hành Windows 11 Home SL Thời điểm ra mắt 2022",
"http://localhost/Website-laptop/images/laptop-asus.jpg",
"21.012.000đ",
3);
INSERT INTO products(Name, Information, Image, CategoryID) 
VALUES ( "Laptop Acer (Core 1 Duo T125438GHz)Ram 7G/Hdd 500GB",
"Bộ xử lý Công nghệ CPU Intel Core i5 Alder Lake - 1240P Số nhân 12 Số luồng 16 Tốc độ CPU 1.70 GHz Tốc độ tối đa Turbo Boost 4.4 GHz Bộ nhớ đệm 12 MB Bộ nhớ RAM, Ổ cứng RAM 16 GB Loại RAM DDR5 2 khe (1 khe 8 GB onboard + 1 khe 8 GB) Tốc độ Bus RAM 4800 MHz Hỗ trợ RAM tối đa 40 GB Ổ cứng 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1 TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1 TB) Màn hình Màn hình 14 inch Độ phân giải Full HD (1920 x 1080) Tần số quét 60 Hz Công nghệ màn hình Màn hình Wide View Tấm nền IPS Chống chói Anti Glare LED Backlit 100% sRGB 400 nits Đồ họa và Âm thanh Card màn hình Card tích hợp - Intel Iris Xe Graphics Công nghệ âm thanh Dolby Atmos Cổng kết nối & tính năng mở rộng Cổng giao tiếp 2 x Thunderbolt 4 hỗ trợ display / power delivery 1 x USB 2.0 Jack tai nghe 3.5 mm 1 x USB 3.2 HDMI LAN (RJ45) Kết nối không dây Bluetooth 5.2Wi-Fi 6E (802.11ax) Khe đọc thẻ nhớ Micro SD Webcam Full HD WebcamCamera IR Đèn bàn phím Có Tính năng khác TPM 2.0 Độ bền chuẩn quân đội MIL STD 810H Bản lề mở 180 độ Bảo mật vân tay Công tắc khóa camera Numberpad Mở khóa khuôn mặt Kích thước & trọng lượng Kích thước, khối lượng Dài 323.4 mm - Rộng 223.1 mm - Dày 18 mm - Nặng 1.25 kg Chất liệu Vỏ kim loại - chiếu nghỉ tay Nhôm Magie Thông tin khác Thông tin Pin 3-cell Li-ion, 63 Wh Hệ điều hành Windows 11 Home SL Thời điểm ra mắt 2022",
"http://localhost/Website-laptop/images/laptop-acer.jpg",
"99.999.999đ",
4);
INSERT INTO products(Name, Information, Image, CategoryID) 
VALUES ( "Laptop Acer 2 (Core 7 Duo T17676GHz)Ram 18G/SSD 500GB",
"Bộ xử lý Công nghệ CPU Intel Core i5 Alder Lake - 1240P Số nhân 12 Số luồng 16 Tốc độ CPU 1.70 GHz Tốc độ tối đa Turbo Boost 4.4 GHz Bộ nhớ đệm 12 MB Bộ nhớ RAM, Ổ cứng RAM 16 GB Loại RAM DDR5 2 khe (1 khe 8 GB onboard + 1 khe 8 GB) Tốc độ Bus RAM 4800 MHz Hỗ trợ RAM tối đa 40 GB Ổ cứng 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1 TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1 TB) Màn hình Màn hình 14 inch Độ phân giải Full HD (1920 x 1080) Tần số quét 60 Hz Công nghệ màn hình Màn hình Wide View Tấm nền IPS Chống chói Anti Glare LED Backlit 100% sRGB 400 nits Đồ họa và Âm thanh Card màn hình Card tích hợp - Intel Iris Xe Graphics Công nghệ âm thanh Dolby Atmos Cổng kết nối & tính năng mở rộng Cổng giao tiếp 2 x Thunderbolt 4 hỗ trợ display / power delivery 1 x USB 2.0 Jack tai nghe 3.5 mm 1 x USB 3.2 HDMI LAN (RJ45) Kết nối không dây Bluetooth 5.2Wi-Fi 6E (802.11ax) Khe đọc thẻ nhớ Micro SD Webcam Full HD WebcamCamera IR Đèn bàn phím Có Tính năng khác TPM 2.0 Độ bền chuẩn quân đội MIL STD 810H Bản lề mở 180 độ Bảo mật vân tay Công tắc khóa camera Numberpad Mở khóa khuôn mặt Kích thước & trọng lượng Kích thước, khối lượng Dài 323.4 mm - Rộng 223.1 mm - Dày 18 mm - Nặng 1.25 kg Chất liệu Vỏ kim loại - chiếu nghỉ tay Nhôm Magie Thông tin khác Thông tin Pin 3-cell Li-ion, 63 Wh Hệ điều hành Windows 11 Home SL Thời điểm ra mắt 2022",
"http://localhost/Website-laptop/images/laptop-acer.jpg",
"17.042.001đ",
4);

CREATE TABLE category(
    ID INTEGER PRIMARY KEY AUTO_INCREMENT ,
    Name VARCHAR(255) NOT NULL
);

INSERT INTO category(Name) VALUES ("Laptop MACBOOK");
INSERT INTO category(Name) VALUES ("Laptop DELL");
INSERT INTO category(Name) VALUES ("Laptop ASUS");
INSERT INTO category(Name) VALUES ("Laptop ACER");


CREATE TABLE users(
    ID INTEGER PRIMARY KEY AUTO_INCREMENT,
    UserName VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Fullname VARCHAR(255) NOT NULL,
    Birthday DATE NOT NULL,
    Address VARCHAR(255) NOT NULL,
    Image VARCHAR(255) NOT NULL
);
INSERT INTO users(UserName, Password, Fullname, Birthday, Address, Image) VALUES ("Nguyễn Huy", "123456", "Nguyễn Trường Giang Huy", "2000-1-21", "Quảng Ninh", "http://localhost/Website-laptop/images/user-root.png");

CREATE TABLE cart(
    ID INTEGER PRIMARY KEY AUTO_INCREMENT,
    ImageProduct VARCHAR(255) NOT NULL,
    NameProduct VARCHAR(255) NOT NULL,
    PriceProduct VARCHAR(255) NOT NULL
)