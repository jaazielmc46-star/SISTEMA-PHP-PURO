<style>
    .footer {
        background-color: #1f2937;
        color: #ffffff;
        padding: 30px 20px 15px;
        font-family: Arial, sans-serif;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        max-width: 1200px;
        margin: auto;
        gap: 20px;
    }

    .footer-section {
        flex: 1;
        min-width: 220px;
    }

    .footer-section h4 {
        margin-bottom: 10px;
        font-size: 16px;
        border-bottom: 1px solid #374151;
        padding-bottom: 5px;
    }

    .footer-section p,
    .footer-section li {
        font-size: 14px;
        margin: 6px 0;
        color: #d1d5db;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section a {
        color: #d1d5db;
        text-decoration: none;
    }

    .footer-section a:hover {
        color: #ffffff;
        text-decoration: underline;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 20px;
        border-top: 1px solid #374151;
        padding-top: 10px;
        font-size: 13px;
        color: #9ca3af;
    }
</style>
<br>
<footer class="footer">
    <div class="footer-container">

        <div class="footer-section">
            <h4>Mi Sistema</h4>
            <p>Gestión de productos y clientes</p>
        </div>

        <div class="footer-section">
            <h4>Módulos</h4>
            <ul>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Clientes</a></li>
                <li><a href="#">Reportes</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Contacto</h4>
            <p>Email: soporte@misistema.com</p>
            <p>Tel: +503 0000-0000</p>
        </div>

    </div>

    <div class="footer-bottom">
        &copy; 2026 Mi Sistema. Todos los derechos reservados.
    </div>
</footer>
