"use client";
import RootLayout from "@/app/layout";
import routes from "@/lib/router";
import Link from "next/link";
export default function ProductsPage() {
  return (
    <RootLayout>
      <div className="p-6 bg-gray-50 min-h-screen">
        {/* Heading */}
        <h1 className="text-3xl font-bold mb-6 text-gray-800">
          Quản Lý Sản Phẩm
        </h1>
        {/* Actions */}
        <div className="flex justify-between items-center mb-6">
          <div className="relative">
            <input
              type="text"
              placeholder="Tìm kiếm sản phẩm..."
              className="w-64 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
            />
            <button className="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
              🔍
            </button>
          </div>
          <Link
            href={routes.productCreate}
            className="px-4 py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600"
          >
            + Thêm Sản Phẩm
          </Link>
        </div>
        {/* Products Table */}
        <div className="bg-white rounded-lg shadow">
          <table className="w-full border-collapse">
            <thead>
              <tr className="bg-gray-100">
                <th className="text-center p-4 border-b">ID</th>
                <th className="text-center p-4 border-b">Tên Sản Phẩm</th>
                <th className="text-center p-4 border-b">Danh Mục</th>
                <th className="text-center p-4 border-b">Slug</th>
                <th className="text-center p-4 border-b">Hình Ảnh</th>
                <th className="text-center p-4 border-b">Giá</th>
                <th className="text-center p-4 border-b">Giá Giảm</th>
                <th className="text-center p-4 border-b">Mô tả ngắn</th>
                <th className="text-center p-4 border-b">Mô tả dài</th>
                <th className="text-center p-4 border-b">Số lượng</th>
                <th className="text-center p-4 border-b">Hành Động</th>
              </tr>
            </thead>
            <tbody>
              <tr className="hover:bg-gray-50">
                <td className="p-4 border-b">#101</td>
                <td className="p-4 border-b">Điện Thoại iPhone 14</td>
                <td className="p-4 border-b">Điện Thoại</td>
                <td className="p-4 border-b text-right">
                  dien-thoai-iphone-14
                </td>
                <td className="p-4 border-b text-right">iphone-14.jpg</td>
                <td className="p-4 border-b text-right">25,000,000 ₫</td>
                <td className="p-4 border-b text-right">23,999,000 ₫</td>
                <td className="p-4 border-b text-right max-w-[100px] truncate">
                  Mô tả ngắn sản phẩm này có thể rất dài nhưng sẽ bị rút gọn khi
                  hiển thị.
                </td>
                <td className="p-4 border-b text-right max-w-[100px] truncate">
                  Mô tả dài sản phẩm này có thể chứa rất nhiều thông tin nhưng
                  chỉ một phần sẽ được hiển thị.
                </td>
                <td className="p-4 border-b text-right">100</td>
                <td className="p-4 border-b text-center">
                  <button className="px-2 py-1 text-white bg-green-500 rounded hover:bg-green-600 mr-2">
                    Sửa
                  </button>
                  <button className="px-2 py-1 text-white bg-red-500 rounded hover:bg-red-600">
                    Xóa
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </RootLayout>
  );
}
