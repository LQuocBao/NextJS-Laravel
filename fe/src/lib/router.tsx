const routes = {
  //các router cho admin
  dashboard: "/",
  products: "/products",
  productCreate: "/products/create",
  // productEdit: (id: string) => `/products/${id}`,
  productEdit: "/products/:id/edit",
  productDelete: "/products/:id/delete",
  //các router cho category
  categories: "/categories",
  categoryCreate: "/categories/create",
  categoryEdit: "/categories/:id/edit",
  categoryDelete: "/categories/:id/delete",
  //các router cho user
  users: "/users",
  userCreate: "/users/create",
  userEdit: "/users/:id/edit",
  userDelete: "/users/:id/delete",
  //Các router cho orders
  orders: "/orders",
  orderEdit: "/orders/:id/edit",
  //Router logout
  logout: "/logout",
};
export default routes;
