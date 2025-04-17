import RootLayout from "@/app/layout";

export default function OrdersPage() {
  return (
    <RootLayout>
      <div className="p-6 bg-gray-50 min-h-screen">
        {/* Heading */}
        <h1 className="text-3xl font-bold mb-6 text-gray-800">
          Quản Lý Đơn Hàng
        </h1>

        {/* Actions */}
        <div className="flex justify-between items-center mb-6">
          {/* Search Bar */}
          <div className="relative">
            <input
              type="text"
              placeholder="Tìm kiếm đơn hàng..."
              className="w-64 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
            />
            <button className="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
              🔍
            </button>
          </div>

          {/* Filter Dropdown */}
          <select className="p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
            <option value="">Tất Cả Trạng Thái</option>
            <option value="pending">Chờ Xử Lý</option>
            <option value="completed">Hoàn Thành</option>
            <option value="canceled">Đã Hủy</option>
          </select>
        </div>

        {/* Orders Table */}
        <div className="bg-white rounded-lg shadow">
          <table className="w-full border-collapse">
            <thead>
              <tr className="bg-gray-100">
                <th className="text-center p-4 border-b">Mã Đơn Hàng</th>
                <th className="text-center p-4 border-b">Khách Hàng</th>
                {/*create_at*/}
                <th className="text-center p-4 border-b">Ngày Đặt</th>
                <th className="text-center p-4 border-b">Tổng Tiền</th>
                <th className="text-center p-4 border-b">Trạng Thái</th>
                <th className="text-center p-4 border-b">Hành Động</th>
              </tr>
            </thead>
            <tbody>
              {/* Example Row */}
              <tr className="hover:bg-gray-50">
                <td className=" text-center p-4 border-b">#DH001</td>
                <td className=" text-center p-4 border-b">Nguyễn Văn A</td>
                <td className=" text-center p-4 border-b">17/04/2025</td>
                <td className=" text-center p-4 border-b">5,000,000 ₫</td>
                <td className=" text-center p-4 border-b">
                  <span className="px-2 py-1 text-sm bg-yellow-100 text-yellow-600 rounded">
                    Chờ Xử Lý
                  </span>
                </td>
                <td className="p-4 border-b text-center">
                  <button className="px-2 py-1 text-white bg-blue-500 rounded hover:bg-blue-600 mr-2">
                    Chi Tiết
                  </button>
                  <button className="px-2 py-1 text-white bg-green-500 rounded hover:bg-green-600 mr-2">
                    Sửa
                  </button>
                  <button className="px-2 py-1 text-white bg-red-500 rounded hover:bg-red-600">
                    Xóa
                  </button>
                </td>
              </tr>
              {/* Repeat Rows as Needed */}
            </tbody>
          </table>
        </div>
      </div>
    </RootLayout>
  );
}
