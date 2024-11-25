<!-- resources/views/components/sidebar.blade.php -->
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo d-flex">
                    <i class='fas fa-book-open' style="font-size: 25px; margin-top: -2px;"></i>
                    <h3 style="margin-top: -5px; margin-left: 20px;">E-LEARNING</h3>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                {{ $slot }}
            </ul>
        </div>
    </div>
</div>
