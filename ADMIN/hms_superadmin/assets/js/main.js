/**
 * Hospital Admin Dashboard - JavaScript
 * Simplified Version - No Modal Errors
 */

(function() {
    'use strict';

    console.log('🏥 Hospital Admin Dashboard Loading...');

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    function init() {
        console.log('✅ Dashboard Initialized!');
        
        initSidebar();
        initNavigation();
        initSearch();
        initDropdowns();
        initTasks();
        initButtons();
        initAnimations();
        
        console.log('✅ All functions loaded successfully!');
    }

    // ===================================
    // SIDEBAR TOGGLE
    // ===================================
    function initSidebar() {
        const toggle = document.getElementById('sidebarToggle');
        const close = document.getElementById('sidebarClose');
        const sidebar = document.getElementById('sidebar');
        
        if (!toggle || !sidebar) {
            console.warn('⚠️ Sidebar elements not found');
            return;
        }

        toggle.onclick = function(e) {
            e.preventDefault();
            sidebar.classList.toggle('show');
            console.log('📱 Sidebar toggled');
        };

        if (close) {
            close.onclick = function(e) {
                e.preventDefault();
                sidebar.classList.remove('show');
                console.log('❌ Sidebar closed');
            };
        }

        // Close on outside click (mobile only)
        document.onclick = function(e) {
            if (window.innerWidth < 992) {
                if (!sidebar.contains(e.target) && !toggle.contains(e.target)) {
                    if (sidebar.classList.contains('show')) {
                        sidebar.classList.remove('show');
                        console.log('🔒 Sidebar auto-closed');
                    }
                }
            }
        };

        console.log('✅ Sidebar initialized');
    }

    // ===================================
    // ACTIVE NAVIGATION
    // ===================================
    function initNavigation() {
        const currentPage = window.location.pathname.split('/').pop() || 'dashboard.html';
        const links = document.querySelectorAll('.sidebar-nav .nav-link');
        
        links.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            }
        });

        console.log('✅ Navigation initialized - Active:', currentPage);
    }

    // ===================================
    // SEARCH FORM
    // ===================================
    function initSearch() {
        const forms = document.querySelectorAll('form');
        
        forms.forEach(form => {
            const input = form.querySelector('input[type="text"]');
            if (input && input.placeholder.toLowerCase().includes('search')) {
                form.onsubmit = function(e) {
                    e.preventDefault();
                    const query = input.value.trim();
                    if (query) {
                        console.log('🔍 Search:', query);
                        alert('Searching for: "' + query + '"');
                    }
                };
            }
        });

        console.log('✅ Search initialized');
    }

    // ===================================
    // DROPDOWN MENUS
    // ===================================
    function initDropdowns() {
        // Notification dropdown
        const notifBtn = document.querySelector('.dropdown .btn-link');
        const badge = document.querySelector('.badge.bg-danger');
        
        if (notifBtn && badge) {
            notifBtn.onclick = function() {
                setTimeout(() => {
                    badge.textContent = '0';
                    badge.style.opacity = '0';
                    setTimeout(() => badge.style.display = 'none', 300);
                    console.log('📬 Notifications marked as read');
                }, 1000);
            };
        }

        // Dropdown items
        const items = document.querySelectorAll('.dropdown-item');
        items.forEach(item => {
            item.onclick = function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || !href) {
                    e.preventDefault();
                    const text = this.textContent.trim();
                    console.log('🔘 Clicked:', text);
                    
                    if (text.includes('Logout')) {
                        if (confirm('Are you sure you want to logout?')) {
                            alert('Logging out...');
                        }
                    } else if (text.includes('Profile')) {
                        alert('Profile page');
                    } else if (text.includes('Settings')) {
                        alert('Settings page');
                    }
                }
            };
        });

        console.log('✅ Dropdowns initialized');
    }

    // ===================================
    // TASK CHECKBOXES
    // ===================================
    function initTasks() {
        const checkboxes = document.querySelectorAll('.form-check-input[type="checkbox"]');
        
        checkboxes.forEach(box => {
            box.onchange = function() {
                const label = this.closest('.list-group-item')?.querySelector('label') || this.nextElementSibling;
                if (label) {
                    if (this.checked) {
                        label.classList.add('text-decoration-line-through', 'text-muted');
                        console.log('✅ Task completed');
                    } else {
                        label.classList.remove('text-decoration-line-through', 'text-muted');
                        console.log('⬜ Task unchecked');
                    }
                }
            };
        });

        console.log('✅ Tasks initialized');
    }

    // ===================================
    // BUTTONS & MODALS
    // ===================================
    function initButtons() {
        // Modal buttons
        const modalBtns = document.querySelectorAll('[data-bs-toggle="modal"]');
        modalBtns.forEach(btn => {
            btn.onclick = function() {
                const target = this.getAttribute('data-bs-target');
                console.log('🔵 Opening modal:', target);
            };
        });

        // Action buttons
        const actionBtns = document.querySelectorAll('.btn-sm');
        actionBtns.forEach(btn => {
            btn.onclick = function(e) {
                e.stopPropagation();
                const icon = this.querySelector('i');
                if (!icon) return;

                if (icon.classList.contains('fa-eye')) {
                    alert('View details');
                } else if (icon.classList.contains('fa-edit')) {
                    alert('Edit item');
                } else if (icon.classList.contains('fa-trash')) {
                    if (confirm('Delete this item?')) {
                        const row = this.closest('tr');
                        if (row) {
                            row.style.opacity = '0';
                            setTimeout(() => row.remove(), 300);
                        }
                    }
                }
            };
        });

        // Table rows
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            row.style.cursor = 'pointer';
            row.onclick = function(e) {
                if (!e.target.closest('button') && !e.target.closest('.btn')) {
                    console.log('📋 Row clicked');
                }
            };
        });

        console.log('✅ Buttons initialized');
    }

    // ===================================
    // ANIMATIONS
    // ===================================
    function initAnimations() {
        // Stat cards hover
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach(card => {
            card.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
            card.onmouseenter = function() {
                this.style.transform = 'translateY(-5px)';
            };
            card.onmouseleave = function() {
                this.style.transform = 'translateY(0)';
            };
        });

        // Progress bars
        const bars = document.querySelectorAll('.progress-bar');
        bars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';
            setTimeout(() => {
                bar.style.transition = 'width 1.5s ease';
                bar.style.width = width;
            }, 500);
        });

        console.log('✅ Animations initialized');
    }

    // ===================================
    // WINDOW RESIZE
    // ===================================
    window.onresize = function() {
        const sidebar = document.getElementById('sidebar');
        if (window.innerWidth >= 992 && sidebar) {
            sidebar.classList.remove('show');
        }
    };

})();
