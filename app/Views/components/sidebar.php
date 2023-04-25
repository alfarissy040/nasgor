<aside class="w-60 m-3">
    <a href="<?= base_url("admin/menu") ?>"
        class="flex items-center px-3 py-2 mb-3 rounded-md shadow-md <?= $active == "menu" ? "bg-emerald-500 text-white" : "hover:bg-slate-100" ?>">
        Menu
    </a>
    <a href="<?= base_url("admin/transaksi") ?>"
        class="flex items-center px-3 py-2 mb-3 rounded-md shadow-md <?= $active == "transaksi" ? "bg-emerald-500 text-white" : "hover:bg-slate-100" ?>">
        Transaksi
    </a>
</aside>