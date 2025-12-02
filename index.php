<?php
// Optional: Start a session if you later want login/user data handled dynamically.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estate Masters - Admin Dashboard</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <style>
      /* ==== YOUR CSS REMAINS UNCHANGED ==== */
<?php echo file_get_contents("style-dashboard.css"); ?>
    </style>
  </head>
  <body>
    <!-- ===== HEADER ===== -->
    <header class="header">
      <div class="header-inner">
        <div style="display: flex; align-items: center; gap: 10px">
          <button class="hamburger" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
          </button>
          <div class="header-brand">
            <a
              href="#"
              style="
                text-decoration: none;
                color: inherit;
                display: flex;
                align-items: center;
                gap: 15px;
              ">
              <img
                src="Picture1.0.png"
                alt="Estate Masters"
                style="height: 40px; width: auto" />
              <span>Estate Masters</span>
            </a>
          </div>
        </div>
        <div class="header-user">
          <div class="user-profile">
            <div class="user-avatar">A</div>
            <div class="user-info">
              <div class="user-name">Admin User</div>
              <div class="user-role">Administrator</div>
            </div>
          </div>
          <a
            href="https://yattib.github.io/estate-masters/"
            class="btn"
            style="
              padding: 8px 12px;
              background: #3b82f6;
              color: white;
              text-decoration: none;
              border-radius: 6px;
              font-size: 13px;
              display: inline-flex;
              align-items: center;
              gap: 6px;
              transition: all 0.3s;
            "
            ><i class="bi bi-globe"></i> View Site</a
          >
         
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div
        class="sidebar-overlay"
        id="sidebarOverlay"
        onclick="toggleSidebar()"></div>

      <!-- ===== SIDEBAR ===== -->
      <aside class="sidebar" id="sidebar">
        <div class="nav-item active" onclick="showSection('dashboard')">
          <i class="bi bi-speedometer2"></i> Dashboard
        </div>
        <div class="nav-item" onclick="showSection('properties')">
          <i class="bi bi-building"></i> Properties
        </div>
        <div class="nav-item" onclick="showSection('tenants')">
          <i class="bi bi-people"></i> Tenants
        </div>
        <div class="nav-item" onclick="showSection('maintenance')">
          <i class="bi bi-tools"></i> Maintenance
        </div>
        <div class="nav-item" onclick="showSection('finances')">
          <i class="bi bi-cash-coin"></i> Finances
        </div>
        <div style="border-top: 1px solid var(--border); margin-top: 10px; padding-top: 10px;">
          <div class="nav-item" onclick="logout()" style="color: var(--danger)">
            <i class="bi bi-box-arrow-right"></i> Logout
          </div>
        </div>
      </aside>

      <!-- ===== CONTENT SECTIONS ===== -->
      <main class="content">
        <!-- All your HTML dashboard sections remain EXACTLY the same — unchanged. -->
        <?php include "dashboard-sections.html"; ?>
      </main>
    </div>

    <script>
      /* ===== Your JS also stays unchanged ===== */
<?php echo file_get_contents("dashboard.js"); ?>
    </script>

  </body>
</html>

