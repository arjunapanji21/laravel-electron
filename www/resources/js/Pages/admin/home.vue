<template lang="">
    <div class="min-h-screen bg-base-300 overflow-auto">
        <div class="bg-primary h-40"></div>
        <div class="container -mt-28 max-w-7xl p-8 mx-auto">
            <div class="card bg-base-100 shadow">
                <div class="card-body">
                    <div class="card-title">Welcome, Admin!</div>
                    <p>Mau melakukan apa hari ini?</p>
                    <div class="grid py-2 grid-cols-4 gap-5">
                        <div
                            class="card bg-primary text-primary-content bordered shadow hover:scale-105 transition"
                            v-for="(item, index) in 4"
                            :key="index"
                        >
                            <div class="card-body">
                                <div class="divider font-bold text-xl">
                                    Input Data Penjualan
                                </div>
                                <span class="mx-auto">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-receipt-cutoff w-32 h-32"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"
                                        />
                                        <path
                                            d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"
                                        />
                                    </svg>
                                </span>
                                <div class="divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import layout from "../../Layouts/superadmin.vue";
import ChartDonut from "../../Components/ChartDonut.vue";
import ChartArea from "../../Components/ChartArea.vue";

export default {
    layout: layout,
    components: {
        ChartDonut,
        ChartArea,
    },
    // data: function () {
    //     return {
    //         seriesPie: [44, 55, 41, 17, 15],
    //         optionsPie: {
    //             legend: {
    //                 show: false,
    //             },
    //             chart: {
    //                 type: "donut",
    //             },
    //             responsive: [
    //                 {
    //                     breakpoint: 480,
    //                     options: {
    //                         legend: {
    //                             position: "bottom",
    //                         },
    //                     },
    //                 },
    //             ],
    //         },
    //         seriesArea: [
    //             {
    //                 name: "Pengeluaran",
    //                 data: [11, 32, 45, 32, 34, 52, 41],
    //                 color: "#ff4560",
    //             },
    //             {
    //                 name: "Pemasukan",
    //                 data: [31, 40, 28, 51, 42, 109, 100],
    //                 color: "#00e396",
    //             },
    //         ],
    //         optionsArea: {
    //             grid: {
    //                 show: false,
    //             },
    //             chart: {
    //                 zoom: {
    //                     enabled: false,
    //                 },
    //             },
    //             dataLabels: {
    //                 enabled: false,
    //             },
    //             stroke: {
    //                 curve: "smooth",
    //             },
    //             xaxis: {
    //                 labels: {
    //                     show: false,
    //                 },
    //                 type: "datetime",
    //                 categories: [
    //                     "2018-09-19T00:00:00.000Z",
    //                     "2018-09-19T01:30:00.000Z",
    //                     "2018-09-19T02:30:00.000Z",
    //                     "2018-09-19T03:30:00.000Z",
    //                     "2018-09-19T04:30:00.000Z",
    //                     "2018-09-19T05:30:00.000Z",
    //                     "2018-09-19T06:30:00.000Z",
    //                 ],
    //             },
    //             yaxis: {
    //                 labels: {
    //                     show: false,
    //                 },
    //             },
    //             tooltip: {
    //                 x: {
    //                     format: "dd/MM/yy HH:mm",
    //                 },
    //             },
    //         },
    //     };
    // },
};
</script>
<style>
.apexcharts-menu-icon {
    visibility: hidden;
}
</style>
