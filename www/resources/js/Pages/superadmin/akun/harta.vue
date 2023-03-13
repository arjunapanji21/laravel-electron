<template lang="">
    <div class="min-h-screen bg-base-300 overflow-auto">
        <div class="bg-primary h-40"></div>
        <div class="container -mt-28 max-w-7xl p-8 mx-auto">
            <div class="text-sm text-primary-content breadcrumbs">
                <ul>
                    <li><a>Admin</a></li>
                    <li>Akun</li>
                </ul>
            </div>
            <div class="card bg-base-100 shadow">
                <div class="card-body">
                    <div class="card-title justify-between">
                        Bagan Akun
                        <span class="text-sm opacity-50 italic"
                            >Chart of Accounts (CoA)</span
                        >
                    </div>
                    <div class="flex gap-2">
                        <ModalTambah></ModalTambah>
                        <ModalEdit></ModalEdit>
                        <ModalHapus></ModalHapus>
                    </div>
                    <div class="tabs pt-4">
                        <a class="tab tab-lifted tab-active">Harta </a>
                        <a class="tab tab-lifted">Hutang </a>
                        <a class="tab tab-lifted">Modal </a>
                        <a class="tab tab-lifted">Pendapatan </a>
                        <a class="tab tab-lifted">HPP </a>
                        <a class="tab tab-lifted">Biaya </a>
                        <a class="tab tab-lifted">Pendapatan Lain-lain </a>
                        <a class="tab tab-lifted">Biaya Lain-lain </a>
                    </div>
                    <div class="card -my-2 rounded-none border bg-base-100">
                        <div class="card-body">
                            <div class="overflow-x-auto">
                                <!-- <table class="ItemTable">
                                    <tr>
                                        <td>10000 - HARTA</td>
                                        <td>Induk</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table class="ItemTable">
                                                <tr>
                                                    <td>11000 - Harta Lancar</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>Induk</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table class="ItemTable sub2">
                                                <tr>
                                                    <td>11010 - Kas</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>Induk</td>
                                    </tr>
                                </table> -->
                                <div class="overflow-x-auto">
                                    <table
                                        class="table table-zebra table-compact w-full"
                                    >
                                        <thead>
                                            <tr>
                                                <th>10000</th>
                                                <th>HARTA</th>
                                                <th>Jenis Akun</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <div class="flex gap-1">
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="16"
                                                                fill="currentColor"
                                                                class="bi bi-arrow-return-right"
                                                                viewBox="0 0 16 16"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"
                                                                />
                                                            </svg>
                                                        </span>
                                                        11000
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="flex gap-1">
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="16"
                                                                fill="currentColor"
                                                                class="bi bi-arrow-return-right"
                                                                viewBox="0 0 16 16"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"
                                                                />
                                                            </svg>
                                                        </span>
                                                        Harta Lancar
                                                    </div>
                                                </td>
                                                <td>Induk</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <div class="flex gap-1">
                                                        <span class="pl-5">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="16"
                                                                fill="currentColor"
                                                                class="bi bi-arrow-return-right"
                                                                viewBox="0 0 16 16"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"
                                                                />
                                                            </svg>
                                                        </span>
                                                        11010
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="flex gap-1">
                                                        <span class="pl-5">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="16"
                                                                fill="currentColor"
                                                                class="bi bi-arrow-return-right"
                                                                viewBox="0 0 16 16"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"
                                                                />
                                                            </svg>
                                                        </span>
                                                        Kas
                                                    </div>
                                                </td>
                                                <td>Induk</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <div class="flex gap-1">
                                                        <span class="pl-10">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="16"
                                                                fill="currentColor"
                                                                class="bi bi-arrow-return-right"
                                                                viewBox="0 0 16 16"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"
                                                                />
                                                            </svg>
                                                        </span>
                                                        11011
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="flex gap-1">
                                                        <span class="pl-10">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="16"
                                                                fill="currentColor"
                                                                class="bi bi-arrow-return-right"
                                                                viewBox="0 0 16 16"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"
                                                                />
                                                            </svg>
                                                        </span>
                                                        Kas Induk
                                                    </div>
                                                </td>
                                                <td>Anak</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <div class="flex gap-1">
                                                        <span class="pl-10">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="16"
                                                                fill="currentColor"
                                                                class="bi bi-arrow-return-right"
                                                                viewBox="0 0 16 16"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"
                                                                />
                                                            </svg>
                                                        </span>
                                                        11012
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="flex gap-1">
                                                        <span class="pl-10">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="16"
                                                                fill="currentColor"
                                                                class="bi bi-arrow-return-right"
                                                                viewBox="0 0 16 16"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"
                                                                />
                                                            </svg>
                                                        </span>
                                                        Kas Kecil
                                                    </div>
                                                </td>
                                                <td>Anak</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import layout from "../../../Layouts/superadmin.vue";
import ModalTambah from "../../../Components/ModalTambah.vue";
import ModalEdit from "../../../Components/ModalEdit.vue";
import ModalHapus from "../../../Components/ModalHapus.vue";
export default {
    layout: layout,
    components:{
        ModalTambah,
        ModalEdit,
        ModalHapus,
    }
};
</script>
<style type="text/css">
.ItemTable {
    width: 100%;
    border: solid 1px #dbdce3;
}
.ItemTable td {
    width: auto;
    padding-left: 20px;
    border: solid 1px #dbdce3;
}
.sub2 td {
    width: auto;
    padding-left: 40px;
    border: solid 1px #dbdce3;
}
</style>
