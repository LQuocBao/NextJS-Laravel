// "use client";
import RootLayout from "@/app/layout";
// import FormInput from "@/components/FormInput";
// import FormSelect from "@/components/FormSelect";
// import FormTextarea from "@/components/FormTextArea";
// import FileUploader from "@/components/FileUploader";
// import SubmitButton from "@/components/SubmitButton";
// import Form from "@/components/Form";

export default function ProductsAdd() {
  return (
    <RootLayout>
      <div className="p-6 bg-gray-50 min-h-screen">
        <h1 className="text-3xl font-bold mb-6 text-gray-800">Thêm Sản Phẩm</h1>
        <form className="bg-white rounded-lg shadow p-6 space-y-4">
          <FormInput
            id="productName"
            label="Tên Sản Phẩm"
            placeholder="Nhập tên sản phẩm"
            required={true}
          />
          <FormSelect id="category" label="Danh Mục" options={categories} />
          <div className="grid grid-cols-2 gap-4">
            <FormInput
              id="price"
              label="Giá"
              type="number"
              placeholder="Nhập giá sản phẩm"
              required={true}
            />
            <FormInput
              id="discountPrice"
              label="Giá Giảm"
              type="number"
              placeholder="Nhập giá giảm (nếu có)"
            />
          </div>
          <FileUploader id="images" label="Hình Ảnh" />
          <FormTextarea
            id="shortDescription"
            label="Mô Tả Ngắn"
            placeholder="Nhập mô tả ngắn gọn cho sản phẩm"
          />
          <FormTextarea
            id="longDescription"
            label="Mô Tả Chi Tiết"
            placeholder="Nhập mô tả chi tiết cho sản phẩm"
            rows={5}
          />
          <div className="text-right">
            <SubmitButton label="Thêm Sản Phẩm" />
          </div>
        </form>
      </div>
    </RootLayout>
  );
}
