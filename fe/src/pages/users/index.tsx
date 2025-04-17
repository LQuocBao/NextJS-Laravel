import RootLayout from "@/app/layout";

export default function UsersPage() {
  return (
    <RootLayout>
      <div className="p-6 bg-gray-50 min-h-screen">
        {/* Heading */}
        <h1 className="text-3xl font-bold mb-6 text-gray-800">
          Quản Lý Người Dùng
        </h1>

        {/* Actions */}
        <div className="flex justify-between items-center mb-6">
          {/* Search Bar */}
          <div className="relative">
            <input
              type="text"
              placeholder="Tìm kiếm người dùng..."
              className="w-64 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
            />
            <button className="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
              🔍
            </button>
          </div>

          {/* Role Filter */}
          <select className="p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
            <option value="">Tất Cả Vai Trò</option>
            <option value="admin">Quản Trị Viên</option>
            <option value="user">Người Dùng</option>
          </select>
        </div>

        {/* Users Table */}
        <div className="bg-white rounded-lg shadow">
          <table className="w-full border-collapse">
            <thead>
              <tr className="bg-gray-100">
                <th className="text-center p-4 border-b">ID</th>
                <th className="text-center p-4 border-b">Họ Tên</th>
                <th className="text-center p-4 border-b">Email</th>
                <th className="text-center p-4 border-b">Số Điện Thoại</th>
                <th className="text-center p-4 border-b">Địa Chỉ</th>
                <th className="text-center p-4 border-b">Vai Trò</th>
                <th className="text-center p-4 border-b">Hành Động</th>
              </tr>
            </thead>
            <tbody>
              {/* Example Row */}
              <tr className="hover:bg-gray-50">
                <td className="p-4 border-b">#001</td>
                <td className="p-4 border-b">Lâm Quốc Bảo</td>
                <td className="p-4 border-b">lamquocbao26042005@gmail.com</td>
                <td className="p-4 border-b">0785548882</td>
                <td className="p-4 border-b">Gò Vấp, TP.HCM</td>
                <td className="p-4 border-b">
                  <span className="px-2 py-1 text-sm bg-blue-100 text-blue-600 rounded">
                    Quản Trị Viên
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
