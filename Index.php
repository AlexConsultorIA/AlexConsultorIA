<?php
// public/index.php
require_once __DIR__ . '/../includes/header.php';
?>

<section id="inicio" class="hero">
    <div class="container hero-inner">
        <div class="hero-text">
            <h1>Asistente de IA para Talleres Mecánicos que atiende clientes y organiza el taller</h1>
            <p>
                Automatiza la atención al cliente, la agenda de vehículos, las Órdenes de Trabajo
                y la información para facturas. Menos caos en el taller, más tiempo para trabajar en los coches.
            </p>
            <div class="hero-buttons">
                <a href="#flujo" class="btn-primary">Quiero ver cómo funciona</a>
                <a href="#contacto" class="btn-secondary">Hablar con Alex</a>
            </div>
        </div>
        <div class="hero-image">
            <!-- Aquí puedes poner una captura o mockup de tu sistema -->
            <div class="hero-mockup">
                <p>Agenda · Órdenes de Trabajo · Facturas</p>
            </div>
        </div>
    </div>
</section>

<section id="talleres" class="section bg-light">
    <div class="container">
        <h2>Especializado en talleres mecánicos</h2>
        <p>
            No es un chatbot genérico. Es un asistente diseñado para el día a día de un taller mecánico:
            clientes llamando, WhatsApp sonando, coches entrando y saliendo y poco tiempo para gestionar papel.
        </p>
        <ul class="features">
            <li>Responde a preguntas frecuentes de clientes (precios orientativos, horarios, citas).</li>
            <li>Registra y organiza la agenda de vehículos.</li>
            <li>Genera y mantiene Órdenes de Trabajo claras y completas.</li>
            <li>Facilita la preparación de facturas con la información de cada trabajo.</li>
        </ul>
    </div>
</section>

<section id="servicios" class="section">
    <div class="container">
        <h2>¿Qué hago exactamente por tu taller?</h2>
        <div class="grid-3">
            <div class="card">
                <h3>Asistente para WhatsApp</h3>
                <p>
                    Tu número de siempre, con un asistente que responde automáticamente, recopila datos del cliente
                    y prepara la información para la cita y la Orden de Trabajo.
                </p>
            </div>
            <div class="card">
                <h3>Chat en la web del taller</h3>
                <p>
                    Un chat 24/7 en tu página web que captura interesados incluso cuando el taller está cerrado.
                    Ideal para no perder oportunidades.
                </p>
            </div>
            <div class="card">
                <h3>Agenda + Órdenes de Trabajo + Facturas</h3>
                <p>
                    El asistente alimenta automáticamente la agenda de vehículos, las Órdenes de Trabajo
                    y los datos necesarios para facturación, para que nada se pierda.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="flujo" class="section bg-light">
    <div class="container">
        <h2>Así trabaja tu asistente de IA dentro del taller</h2>
        <ol class="steps">
            <li>
                <strong>1. El cliente contacta</strong><br>
                Escribe por WhatsApp o web para pedir cita, preguntar precio o ver el estado de su coche.
                El asistente responde y recoge los datos clave (nombre, matrícula, servicio, fecha preferida).
            </li>
            <li>
                <strong>2. Se actualiza la agenda de vehículos</strong><br>
                La cita se registra en la agenda con día, hora, tipo de intervención y datos del cliente.
            </li>
            <li>
                <strong>3. Se genera la Orden de Trabajo</strong><br>
                Cuando el coche entra al taller, se crea una Orden de Trabajo con
                vehículo, trabajos a realizar, observaciones y, si quieres, mecánico asignado.
            </li>
            <li>
                <strong>4. Base para la factura</strong><br>
                Una vez terminado el trabajo, la Orden de Trabajo sirve como base para la factura:
                piezas, horas y mano de obra ya organizadas.
            </li>
        </ol>
        <p class="highlight">
            ✅ Menos papeles sueltos · ✅ Menos información perdida · ✅ Más control sobre lo que entra y sale del taller
        </p>
    </div>
</section>

<section id="sobre-mi" class="section">
    <div class="container about-grid">
        <div>
            <h2>Sobre mí</h2>
            <p>
                Soy Alex, Consultor de IA especializado en asistentes virtuales para empresas, con foco en talleres mecánicos.
            </p>
            <p>
                Conozco el caos del día a día en el taller: llamadas constantes, WhatsApp, clientes en la puerta, coches pendientes...
                Mi objetivo es que la tecnología <strong>se adapte a tu forma de trabajar</strong>, no al revés.
            </p>
            <p>
                Me encargo de todo: entender cómo trabajáis, diseñar el flujo del asistente y ayudarte a integrarlo
                en tu operativa diaria.
            </p>
        </div>
        <div class="about-image">
            <!-- Aquí podrías poner tu foto -->
            <div class="about-placeholder">
                <p>Foto de Alex<br>Consultor IA</p>
            </div>
        </div>
    </div>
</section>

<section id="contacto" class="section bg-highlight">
    <div class="container">
        <h2>¿Quieres ver cómo quedaría un asistente en tu taller?</h2>
        <p>
            Rellena este formulario o escríbeme por WhatsApp. Te preparo una demo donde simulamos:
            la entrada de un cliente, la creación de la cita, la Orden de Trabajo y la preparación de la factura.
        </p>

        <form action="/contacto.php" method="post" class="contact-form">
            <div class="form-group">
                <label for="nombre_taller">Nombre del taller</label>
                <input type="text" id="nombre_taller" name="nombre_taller" required>
            </div>

            <div class="form-group">
                <label for="nombre_contacto">Nombre de la persona de contacto</label>
                <input type="text" id="nombre_contacto" name="nombre_contacto" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="mensaje">¿En qué te puedo ayudar?</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn-primary">Solicitar demo con Alex</button>
        </form>

        <p class="contact-extra">
            También puedes escribirme directamente por
            <a href="<?= htmlspecialchars($whatsappLink) ?>" target="_blank" rel="noopener">WhatsApp</a>
            o al correo
            <a href="mailto:<?= htmlspecialchars($contactEmail) ?>"><?= htmlspecialchars($contactEmail) ?></a>.
        </p>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
