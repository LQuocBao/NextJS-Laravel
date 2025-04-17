"use client";

export default function Form() {
  const categories = [
    { value: "", label: "Chọn danh mục" },
    { value: "electronics", label: "Điện Tử" },
    { value: "fashion", label: "Thời Trang" },
    { value: "home", label: "Đồ Gia Dụng" },
  ];

  return (
    <form className="bg-white rounded-lg shadow p-6 space-y-4">
      {/* Product Name */}
      <div>
        <label
          htmlFor="productName"
          className="block text-gray-700 font-medium"
        >
          Tên Sản Phẩm
        </label>
        <input
          id="productName"
          type="text"
          placeholder="Nhập tên sản phẩm"
          className="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
          required
        />
      </div>

      {/* Category */}
      <div>
        <label htmlFor="category" className="block text-gray-700 font-medium">
          Danh Mục
        </label>
        <select
          id="category"
          className="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
          value="category"
        >
          {categories.map((cat) => (
            <option key={cat.value} value={cat.value}>
              {cat.label}
            </option>
          ))}
        </select>
      </div>

      {/* Price */}
      <div className="grid grid-cols-2 gap-4">
        <div>
          <label htmlFor="price" className="block text-gray-700 font-medium">
            Giá
          </label>
          <input
            id="price"
            type="number"
            placeholder="Nhập giá sản phẩm"
            className="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
            required
            value="price"
          />
        </div>
        <div>
          <label
            htmlFor="discountPrice"
            className="block text-gray-700 font-medium"
          >
            Giá Giảm
          </label>
          <input
            id="discountPrice"
            type="number"
            placeholder="Nhập giá giảm (nếu có)"
            className="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
            value="price_sale"
          />
        </div>
      </div>

      {/* Images */}
      <div>
        <label htmlFor="images" className="block text-gray-700 font-medium">
          Hình Ảnh
        </label>
        <input
          id="images"
          type="file"
          accept="image/*"
          className="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
          value="images"
        />
      </div>

      {/* Short Description */}
      <div>
        <label
          htmlFor="shortDescription"
          className="block text-gray-700 font-medium"
        >
          Mô Tả Ngắn
        </label>
        <textarea
          id="shortDescription"
          placeholder="Nhập mô tả ngắn gọn cho sản phẩm"
          className="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
          rows={3}
          value="shortDescription"
        ></textarea>
      </div>

      {/* Long Description */}
      <div>
        <label
          htmlFor="longDescription"
          className="block text-gray-700 font-medium"
        >
          Mô Tả Chi Tiết
        </label>
        <textarea
          id="longDescription"
          placeholder="Nhập mô tả chi tiết cho sản phẩm"
          className="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
          rows={5}
          value="longDescription"
        ></textarea>
      </div>

      {/* Submit Button */}
      <div className="text-right">
        <button
          type="submit"
          className="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700"
        >
          Thêm Sản Phẩm
        </button>
      </div>
    </form>
  );
}
