<template>
    <div data-theme="winter">
        <div class="navbar sticky top-0 z-50 bg-base-100 text-primary shadow">
            <div class="flex-none">
                <Link
                    :href="route('superadmin.home')"
                    class="btn btn-ghost normal-case text-xl"
                >
                    <img :src="master.logo" width="100"
                /></Link>
            </div>
            <div class="flex-1">
                <ul class="menu menu-horizontal px-1">
                    <li>
                        <Link :href="route('superadmin.akun.harta')">Akun</Link>
                    </li>
                    <li><a>Kas & Bank</a></li>
                    <li tabindex="0">
                        <a>
                            Data
                            <svg
                                class="fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"
                                />
                            </svg>
                        </a>
                        <ul class="p-2 bg-base-100 text-primary shadow">
                            <li><a>Data Pelanggan</a></li>
                            <li><a>Data Supplier</a></li>
                            <li><a>Data Salesman</a></li>
                            <li><a>Data Toko</a></li>
                        </ul>
                    </li>
                    <li><a>Penjualan</a></li>
                    <li><a>Pembelian</a></li>
                    <li><a>Persediaan</a></li>
                    <li><a>Laporan</a></li>
                </ul>
            </div>
            <div class="flex-none">
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost">
                        {{ auth.user.nama }}
                        <span class="ml-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-caret-down-fill"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"
                                />
                            </svg> </span
                    ></label>
                    <ul
                        tabindex="0"
                        class="dropdown-content menu p-2 shadow bg-base-100 text-primary rounded-box w-52"
                    >
                        <li><a>Pengaturan</a></li>
                        <li><a>Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div>
            <slot></slot>
        </div>

        <footer
            class="footer z-50 sticky bottom-0 footer-center shadow p-4 bg-primary text-primary-content"
        >
            <div>
                <p>
                    © 2022 - {{ new Date().getFullYear() }}. All right reserved
                    by KOBATECH.ID
                </p>
            </div>
        </footer>
    </div>
</template>
<script>
export default {
    props: {
        master: Object,
        auth: Object,
    },
};
</script>
<style></style>
