interface FormTextareaProps {
  id: string;
  label: string;
  placeholder?: string;
  rows?: number;
}

const FormTextarea: React.FC<FormTextareaProps> = ({
  id,
  label,
  placeholder,
  rows = 3,
}) => {
  return (
    <div>
      <label htmlFor={id} className="block text-gray-700 font-medium">
        {label}
      </label>
      <textarea
        id={id}
        placeholder={placeholder}
        className="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
        rows={rows}
      ></textarea>
    </div>
  );
};

export default FormTextarea;
