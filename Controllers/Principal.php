<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        
    }
    //vista about
    public function about()
    {
        $data['title'] = 'Nuestro Equipo';
        $this->views->getView('principal', "about", $data);
    }
    //vista shop
    public function shop()
    {
        $data['title'] = 'Nuestros Productos';
        $data['productos'] = $this->model->getProductos();
        $this->views->getView('principal', "shop", $data);
    }
    //vista detail
    public function detail($id_producto)
{
    // Obtener los datos del producto
    $productos = $this->model->getProducto($id_producto);

    // Verificar si se encontró el producto
    if (!empty($productos)) {
        // Obtener el primer producto del conjunto de resultados
        $data['producto'] = $productos[0];
        $data['title'] = $data['producto']['nombre'];
    } else {
        // Producto no encontrado, establecer datos predeterminados o mostrar un error
        $data['producto'] = [
            'nombre' => 'Producto no encontrado',
            // Otros campos del producto
        ];
        $data['title'] = 'Producto no encontrado';
    }

    // Cargar la vista
    $this->views->getView('principal', "detail", $data);
}

    //vista contactos
    public function contactos()
    {
        $data['title'] = 'Contactos';
        $this->views->getView('principal', "contact", $data);
    }

}

?>