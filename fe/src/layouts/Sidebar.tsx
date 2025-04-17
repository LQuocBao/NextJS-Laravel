"use client";
import Link from "next/link";
import routes from "@/lib/router";
export default function Sidebar() {
  return (
    <aside className="w-64 bg-gray-800 text-white flex flex-col p-4">
      <h1 className="text-2xl font-bold mb-6">Admin Tech Sphere</h1>
      <nav className="flex flex-col gap-4">
        <Link href={routes.dashboard} className="hover:bg-gray-700 p-2 rounded">
          Thống Kê
        </Link>
        <Link href={routes.products} className="hover:bg-gray-700 p-2 rounded">
          Sản Phẩm
        </Link>
        <Link
          href={routes.categories}
          className="hover:bg-gray-700 p-2 rounded"
        >
          Danh Mục
        </Link>
        <Link href={routes.users} className="hover:bg-gray-700 p-2 rounded">
          Người Dùng
        </Link>
        <Link href={routes.orders} className="hover:bg-gray-700 p-2 rounded">
          Đơn Hàng
        </Link>
        <Link href={routes.logout} className="hover:bg-gray-700 p-2 rounded">
          Đăng Xuất
        </Link>
      </nav>
    </aside>
  );
}
