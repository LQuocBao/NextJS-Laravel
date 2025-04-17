import RootLayout from "@/app/layout";

export default function OrderDetail() {
  return (
    <RootLayout>
      <div className="p-6 bg-gray-50 min-h-screen">
        {/* Header */}
        <h1 className="text-3xl font-bold mb-6 text-gray-800">
          Chi Tiết Đơn Hàng
        </h1>
        {/* Order Information */}
        <div className="bg-white rounded-lg shadow p-6 mb-6">
          <h2 className="text-xl font-semibold mb-4">Thông Tin Đơn Hàng</h2>
          <div className="grid grid-cols-2 gap-4">
            <div>
              <p className="text-gray-600">
                <strong>Mã Đơn Hàng:</strong> #12345
              </p>
              <p className="text-gray-600">
                <strong>Ngày Đặt Hàng:</strong> 17/04/2025
              </p>
              <p className="text-gray-600">
                <strong>Trạng Thái:</strong>{" "}
                <span className="px-2 py-1 bg-yellow-100 text-yellow-700 rounded">
                  Đang Xử Lý
                </span>
              </p>
            </div>
            <div>
              <p className="text-gray-600">
                <strong>Khách Hàng:</strong> Nguyễn Văn A
              </p>
              <p className="text-gray-600">
                <strong>Email:</strong> nguyenvana@gmail.com
              </p>
              <p className="text-gray-600">
                <strong>Điện Thoại:</strong> 0123 456 789
              </p>
            </div>
          </div>
        </div>

        {/* Product List */}
        <div className="bg-white rounded-lg shadow p-6 mb-6">
          <h2 className="text-xl font-semibold mb-4">Danh Sách Sản Phẩm</h2>
          <table className="w-full border-collapse">
            <thead>
              <tr className="bg-gray-100">
                <th className="text-left p-4 border-b">Tên Sản Phẩm</th>
                <th className="text-right p-4 border-b">Số Lượng</th>
                <th className="text-right p-4 border-b">Giá</th>
                <th className="text-right p-4 border-b">Tổng</th>
              </tr>
            </thead>
            <tbody>
              <tr className="hover:bg-gray-50">
                <td className="p-4 border-b">Điện Thoại iPhone 14</td>
                <td className="p-4 border-b text-right">2</td>
                <td className="p-4 border-b text-right">25,000,000 ₫</td>
                <td className="p-4 border-b text-right">50,000,000 ₫</td>
              </tr>
              <tr className="hover:bg-gray-50">
                <td className="p-4 border-b">Tai Nghe AirPods Pro</td>
                <td className="p-4 border-b text-right">1</td>
                <td className="p-4 border-b text-right">5,000,000 ₫</td>
                <td className="p-4 border-b text-right">5,000,000 ₫</td>
              </tr>
              <tr>
                <td className="p-4 border-b text-right font-bold" colSpan={3}>
                  Tổng Cộng:
                </td>
                <td className="p-4 border-b text-right font-bold">
                  55,000,000 ₫
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        {/* Actions */}
        <div className="bg-white rounded-lg shadow p-6">
          <h2 className="text-xl font-semibold mb-4">Hành Động</h2>
          <div className="flex space-x-4">
            <button className="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700">
              Cập Nhật Trạng Thái
            </button>
            <button className="px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow hover:bg-green-700">
              Liên Hệ Khách Hàng
            </button>
            <button className="px-4 py-2 bg-red-600 text-white font-semibold rounded-lg shadow hover:bg-red-700">
              Hủy Đơn Hàng
            </button>
          </div>
        </div>
      </div>
    </RootLayout>
  );
}
