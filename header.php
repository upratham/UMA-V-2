<!-- Profile Section with Styling -->
<style>
    .user-profile {
        position: fixed;
        top: 10px;
        right: 10px;
        text-align: right;
        z-index: 1000;
    }

    .user-profile .user-name {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .user-profile .dropdown {
        position: relative;
        display: inline-block;
    }

    .user-profile .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 150px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .user-profile .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .user-profile .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .user-profile .dropdown:hover .dropdown-content {
        display: block;
    }

    .back-button {
        position: fixed;
        top: 10px;
        left: 10px;
        background-color: transparent;
        border: none;
        color: #000;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        z-index: 1000;
        display: flex;
        align-items: center;
    }

    .back-button:hover {
        text-decoration: underline;
    }

    .back-arrow {
        margin-right: 5px;
        font-size: 18px;
    }
</style>

<!-- Back Button -->
<button class="back-button" onclick="history.back()">
    <span class="back-arrow">&#8592;</span> Atrás
</button>

<!-- User Profile Section -->
<div class="user-profile">
    
<!--     <div class="dropdown">
        <span>perfil ▼</span>
        <div class="dropdown-content">
            <a href="#" onclick="openModal('changePasswordModal')"> Cambiar la contraseña</a>
            <a href="../logout.php">cerrar sesión</a> -->
            
        </div>
    </div>
</div>
