interface Option {
  value: string;
  label: string;
}

interface FormSelectProps {
  id: string;
  label: string;
  options: Option[];
}

const FormSelect: React.FC<FormSelectProps> = ({ id, label, options }) => {
  return (
    <div>
      <label htmlFor={id} className="block text-gray-700 font-medium">
        {label}
      </label>
      <select
        id={id}
        className="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
      >
        {options.map((option, index) => (
          <option key={index} value={option.value}>
            {option.label}
          </option>
        ))}
      </select>
    </div>
  );
};

export default FormSelect;
