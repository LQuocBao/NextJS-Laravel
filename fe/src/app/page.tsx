export default function AdminDashboard() {
  return (
    <div className="p-6 bg-gray-50 min-h-screen">
      {/* Heading */}
      <h1 className="text-3xl font-bold mb-6 text-gray-800">Bảng Điều Khiển</h1>

      {/* Statistics Cards */}
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        {/* Card 1 */}
        <div className="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
          <h2 className="text-xl font-semibold text-gray-700 mb-2">
            Doanh Thu
          </h2>
          <p className="text-2xl font-bold text-green-500">₫ 45,000,000</p>
          <p className="text-gray-500 text-sm">Trong tháng này</p>
        </div>
        {/* Card 2 */}
        <div className="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
          <h2 className="text-xl font-semibold text-gray-700 mb-2">
            Khách Hàng
          </h2>
          <p className="text-2xl font-bold text-blue-500">1,250</p>
          <p className="text-gray-500 text-sm">Đăng ký mới</p>
        </div>
        {/* Card 3 */}
        <div className="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
          <h2 className="text-xl font-semibold text-gray-700 mb-2">Đơn Hàng</h2>
          <p className="text-2xl font-bold text-orange-500">320</p>
          <p className="text-gray-500 text-sm">Trong tuần này</p>
        </div>
        {/* Card 4 */}
        <div className="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
          <h2 className="text-xl font-semibold text-gray-700 mb-2">
            Tỉ Lệ Chuyển Đổi
          </h2>
          <p className="text-2xl font-bold text-purple-500">8.7%</p>
          <p className="text-gray-500 text-sm">So với tuần trước</p>
        </div>
      </div>

      <div className="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <div className="bg-white p-6 rounded-lg shadow">
          <h2 className="text-xl font-semibold text-gray-700 mb-4">
            Xu Hướng Doanh Thu
          </h2>
          <div className="h-64">
            <p className="text-gray-500">Biểu đồ doanh thu sẽ hiển thị ở đây</p>
          </div>
        </div>
        <div className="bg-white p-6 rounded-lg shadow">
          <h2 className="text-xl font-semibold text-gray-700 mb-4">
            Phân Bổ Danh Mục
          </h2>
          <div className="h-64">
            <p className="text-gray-500">Biểu đồ danh mục sẽ hiển thị ở đây</p>
          </div>
        </div>
      </div>

      {/* Data Table Section */}
      <div className="bg-white p-6 rounded-lg shadow">
        <h2 className="text-xl font-semibold text-gray-700 mb-4">
          Đơn Hàng Gần Đây
        </h2>
        <table className="w-full border-collapse">
          <thead>
            <tr className="bg-gray-100">
              <th className="text-left p-2 border-b">ID</th>
              <th className="text-left p-2 border-b">Khách Hàng</th>
              <th className="text-left p-2 border-b">Ngày Đặt</th>
              <th className="text-left p-2 border-b">Tổng</th>
              <th className="text-left p-2 border-b">Trạng Thái</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td className="p-2 border-b">#1001</td>
              <td className="p-2 border-b">Nguyễn Văn A</td>
              <td className="p-2 border-b">15/04/2025</td>
              <td className="p-2 border-b text-green-500">₫ 2,500,000</td>
              <td className="p-2 border-b text-orange-500">Đang Xử Lý</td>
            </tr>
            <tr>
              <td className="p-2 border-b">#1002</td>
              <td className="p-2 border-b">Trần Thị B</td>
              <td className="p-2 border-b">14/04/2025</td>
              <td className="p-2 border-b text-green-500">₫ 1,200,000</td>
              <td className="p-2 border-b text-green-500">Hoàn Thành</td>
            </tr>
            {/* Add more rows as needed */}
          </tbody>
        </table>
      </div>
    </div>
  );
}
