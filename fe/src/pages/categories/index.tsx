import RootLayout from "@/app/layout";

export default function CategoriesPage() {
  return (
    <RootLayout>
      <div className="p-6 bg-gray-50 min-h-screen">
        {/* Heading */}
        <h1 className="text-3xl font-bold mb-6 text-gray-800">
          Quản Lý Danh Mục
        </h1>

        {/* Actions */}
        <div className="flex justify-between items-center mb-6">
          {/* Search Bar */}
          <div className="relative">
            <input
              type="text"
              placeholder="Tìm kiếm danh mục..."
              className="w-64 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
            />
            <button className="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
              🔍
            </button>
          </div>

          {/* Add New Category Button */}
          <button className="px-4 py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600">
            + Thêm Danh Mục
          </button>
        </div>

        {/* Categories Table */}
        <div className="bg-white rounded-lg shadow">
          <table className="w-full border-collapse">
            <thead>
              <tr className="bg-gray-100">
                <th className="text-left p-4 border-b">ID</th>
                <th className="text-left p-4 border-b">Tên Danh Mục</th>
                <th className="text-left p-4 border-b">Slug</th>
                <th className="text-left p-4 border-b">Hình Ảnh</th>
                <th className="text-center p-4 border-b">Hành Động</th>
              </tr>
            </thead>
            <tbody>
              {/* Example Row */}
              <tr className="hover:bg-gray-50">
                <td className="p-4 border-b">#001</td>
                <td className="p-4 border-b">Điện Thoại</td>
                <td className="p-4 border-b">dien-thoai</td>
                <td className="p-4 border-b">dien-thoai.jpg</td>
                <td className="p-4 border-b text-center">
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
