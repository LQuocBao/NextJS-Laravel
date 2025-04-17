interface FileUploaderProps {
  id: string;
  label: string;
}

const FileUploader: React.FC<FileUploaderProps> = ({ id, label }) => {
  return (
    <div>
      <label htmlFor={id} className="block text-gray-700 font-medium">
        {label}
      </label>
      <input
        id={id}
        type="file"
        accept="image/*"
        className="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
      />
    </div>
  );
};

export default FileUploader;
