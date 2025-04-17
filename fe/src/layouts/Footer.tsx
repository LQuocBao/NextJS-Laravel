export default function Footer() {
  return (
    <footer className="fixed bottom-0 right-0 p-4">
      <p className="text-gray-600 text-sm">
        &copy; {new Date().getFullYear()} Assignment 2 - Laravel. All rights
        reserved by Quốc Bảo.
      </p>
    </footer>
  );
}
