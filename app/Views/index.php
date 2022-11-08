<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Apex Chart -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- DataTables JS -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- Tailwind Forms -->
    <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>

    <title>Document</title>
</head>

<body class="mainbg">
    <!-- Main Body -->
    <div class="container w-11/12 mx-auto my-10 bg-slate-100 rounded-lg">
        <!-- Header -->
        <div class="container w-full shadow-md p-5 px-10">
            <div class="flex justify-between">
                <!-- Title and Nav -->
                <div class="flex">
                    <!-- Web Title -->
                    <div class="container flex">
                        <!-- Logo -->
                        <div class="m-auto">
                            <img class="h-8 m-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                        </div>
                        <!-- Logo Caption -->
                        <div class="font-sans text-lg font-bold my-auto m-4">
                            <h1>SITISAR</h1>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="container mx-4 my-auto">
                        <nav>
                            <ul class="flex space-x-8 text-gray-400">
                                <li>
                                    <a href="" class="hover:text-black transition ease-in duration-150">Home</a>
                                </li>
                                <li>
                                    <a href="" class="hover:text-black transition ease-in duration-150">Explore</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Login -->
                <div>
                    <button class="rounded-lg bg-gray-100 m-auto p-2 px-8 text-blue-500 font-bold hover:bg-blue-500 hover:text-white transition duration-150 ease-in border-blue-500 border-2">
                        <i class="fa-solid fa-user"></i> Login
                    </button>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="container w-11/12 p-4 mx-auto my-8">
            <!-- Main Description -->
            <div class="container my-4 p-4 flex">
                <div>
                    <!-- Sub-heading -->
                    <h2 class="text-2xl font-semibold">Sistem Informasi Statistik Perdagangan Besar</h3>
                        <!-- Description -->
                        <div class="font-sans my-8">
                            <p>
                                Sistem Informasi Statistik Perdagangan Besar (SITISAR) adalah sebuah laman <i>website</i> yang dibangun dengan tujuan memberikan
                                kemudahan bagi pengguna dalam mendapatkan akses informasi terhadap data statistik yang berkaitan dengan sektor perdagangan besar
                                (ekspor dan impor) di Indonesia.
                            </p>
                        </div>
                        <div class="my-4">
                            <a href="#explore" class="rounded-full bg-blue-500 p-2 font-bold text-white px-4 w-max flex">
                                <span class="m-auto">Explore Data</span>
                                <i class="fa-solid fa-chevron-right mx-2 m-auto"></i>
                            </a>
                        </div>
                </div>
                <div>
                    <img src="/assets/svg/ship.svg" alt="">
                </div>
            </div>

            <!-- Horizontal Line -->
            <div class="p-10">
                <hr class=" border-6 border-gray-300">
            </div>

            <!-- Chart Type -->
            <div class="container p-2 flex mb-4">
                <!-- Area Chart -->
                <div class="mx-2 w-2/5 border-2 border-blue-500 rounded-md">
                    <a class="w-auto" href="">
                        <div class="ml-4 w-4/5 p-4">
                            <p class="font-sans text-blue-500 text-md">Data Distribusi Tujuan Ekspor</p>
                            <p class="text-sm">Menampilkan data distribusi ekspor berbagai komoditas di Indonesia berdasarkan negara tujuan dan data distribusi komoditas yang diekspor ke suatu negara menggunakan visualisasi area chart</p>
                        </div>
                    </a>
                </div>
                <!-- Time Series -->
                <div class="mx-2 w-2/5 border-2 border-gray-300 rounded-md">
                    <a class="w-auto" href="">
                        <div class="ml-4 w-4/5 p-4">
                            <p class="font-sans text-gray-500 text-md">Data Perkembangan Ekspor Indonesia</p>
                            <p class="text-sm">Menampilkan data perkembangan ekspor berbagai komoditas dari waktu ke waktu dengan menggunakan visualisasi diagram garis</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Data Visualization -->
            <div class="container flex w-full justify-between" id="explore">
                <!-- Data Setting -->
                <div class="max-w-md basis-3/12 bg-gray-200 p-4 mr-2 rounded-lg">
                    <span class="text-sans font-bold text-lg">
                        <i class="fa-solid fa-list"></i> Data Select
                    </span>
                    <hr class="m-2 border-6 border-gray-300">
                    <p class="text-sm">Select data type, country or commodity, year, and month from the selection below, click "Visualize" to build the visualization. The graphs and table will be updated according to your selection</p>
                    <br>
                    <!-- Select Type -->
                    <div class="container">
                        <span class="py-2">Data Type</span>
                        <br>
                        <select name="type" id="type" class="break-normal text-sm my-3 break-all max-w-xs">
                            <option class="max-w-sm" value="countries">Countries by Commodity</option>
                            <option class="max-w-sm" value="commodities">Commodities by Country</option>
                        </select>
                    </div>
                    <!-- Select Options -->
                    <div class="container">
                        <span class="py-2" id="optionTitle">Commodity</span>
                        <br>
                        <select name="options" id="options" class="break-normal text-sm my-3 break-all max-w-xs">
                            <?php foreach ($commodities as $item) : ?>
                                <option class="max-w-sm" value="<?php echo $item['commodity']; ?>"><?php echo $item['commodity']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Select Year -->
                    <div class="container">
                        <span class="py-2">Year</span>
                        <br>
                        <select name="year" id="year" class="break-normal text-sm my-3 break-all max-w-xs">
                            <option class="max-w-sm" value="2022">2022</option>
                        </select>
                    </div>
                    <!-- Select Month -->
                    <div class="container">
                        <span class="py-2">Month</span>
                        <br>
                        <select name="month" id="month" class="break-normal text-sm my-3 break-all max-w-xs">
                            <option selected value='1'>January</option>
                            <option value='2'>February</option>
                            <option value='3'>March</option>
                            <option value='4'>April</option>
                            <option value='5'>May</option>
                            <option value='6'>June</option>
                            <option value='7'>July</option>
                            <option value='8'>August</option>
                            <option value='9'>September</option>
                            <option value='10'>October</option>
                            <option value='11'>November</option>
                            <option value='12'>December</option>
                        </select>
                    </div>
                    <hr class="m-2 border-t-2 border-gray-300">
                    <button id="visualize" class="border-2 border-blue-500 text-blue-500 p-2 px-4 mt-2 rounded-sm hover:text-white hover:bg-blue-500 transition ease-in duration-150">Visualize</button>
                </div>

                <!-- Data Visualization -->
                <div class="basis-9/12 bg-gray-200 p-3 ml-2 rounded-lg">
                    <span class="text-sans font-bold text-lg">
                        <i class="fa-solid fa-chart-simple"></i> Data Visualization
                    </span>
                    <hr class="m-2 border-6 border-gray-300">
                    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 mx-2 my-2 rounded relative" role="alert">
                        <strong class="font-bold">Data bersifat fiktif!</strong>
                        <span class="block sm:inline">data hanya diperuntukan untuk keperluan pengujian.</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </span>
                    </div>
                    <div class="container flex">
                        <div class="basis-1/2 bg-white m-2 p-4">
                            <div>
                                <h3 class="align-items-center" id="charttitle"></h3>
                            </div>
                            <div id="chart"></div>
                        </div>
                        <div class="basis-1/2 bg-white m-2 p-4">
                            <div>
                                <h3 class="align-items-center" id="chart2title"></h3>
                            </div>
                            <div id="chart2"></div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Time Series -->
            <div class="container bg-gray-200 p-4 my-4 rounded-lg" id="scroll">
                <span class="text-sans font-bold text-lg">
                    <i class="fa-solid fa-table"></i> Perkembangan Ekspor
                </span>
                <hr class="m-4 border-6 border-gray-300">
                <div class="bg-white m-2 p-4">
                    <div>
                        <h3 class="align-items-center" id="charttitle"></h3>
                    </div>
                    <div id="chart3"></div>
                </div>
            </div>

            <!-- Tables -->
            <div class="container bg-gray-200 p-4 my-4 rounded-lg">
                <span class="text-sans font-bold text-lg">
                    <i class="fa-solid fa-table"></i> Data Table
                </span>
                <hr class="m-4 border-6 border-gray-300">
                <div class="container my-2 p-4 bg-white">
                    <table id="DataTable">
                        <thead>
                            <tr>
                                <th id="optionTable" class="w-2/5">Country</th>
                                <th>Net Weight (Kg)</th>
                                <th>Net Value (Million US$)</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <footer class="w-full bg-blue-900 p-4 rounded-b-lg">
            <div class="container m-auto w-max">
                <span class="text-white">Copyright&#169; AWB</span>
            </div>
        </footer>
    </div>

    <script src="/assets/js/arrangeData.js"></script>
    <script src="/assets/js/getTotal.js"></script>
    <script>
        let selectedType = 'countries'
        let selectedOption = 'AGAR-AGAR';
        let selectedYear = 2022;
        let selectedMonth = 1;
        let totalWeight = 999;
        let totalValue = 999;

        document.getElementById('visualize').onclick = () => {
            selectedOption = document.getElementById('options').value;
            selectedYear = document.getElementById('year').value;
            selectedMonth = document.getElementById('month').value;
            document.getElementById('optionTable').innerHTML = (selectedType == 'countries') ? 'Country' : 'Commodity';
            getData(selectedType, selectedOption, selectedYear, selectedMonth);
        }

        document.getElementById('type').onchange = () => {
            selectedType = document.getElementById('type').value;
            document.getElementById('optionTitle').innerHTML = (selectedType == 'countries') ? 'Commodity' : 'Country';

            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                let data = JSON.parse(this.responseText)['options'];

                let selectElement = document.getElementById('options');
                selectElement.innerHTML = '';

                data.forEach(e => {
                    let newOption = document.createElement('option');
                    newOption.value = e['option'];
                    newOption.innerHTML = e['option'];
                    selectElement.appendChild(newOption)
                });
            }
            xhttp.open("GET", `/getoptions/${selectedType}`, true);
            xhttp.send();
        }

        var options = {
            series: [],
            legend: {
                show: false
            },
            chart: {
                height: 500,
                type: 'treemap',
                events: {
                    dataPointSelection: function(event, chartContext, config) {
                        let selected = chartContext.data.twoDSeriesX[config.dataPointIndex];
                        let xhttp = new XMLHttpRequest();
                        xhttp.onload = function() {
                            let timeseriesdata = JSON.parse(this.responseText);
                            chart3.updateSeries([{
                                name: "Net Weight",
                                data: timeseriesdata['net_weight']
                            }, {
                                name: "Net Value",
                                data: timeseriesdata['net_value']
                            }])
                        }
                        if (selectedType == 'countries') {
                            xhttp.open("GET", `/gettimeseries/${selected}/${selectedOption}`, true);
                            chart3.updateOptions({
                                title: {
                                    text: `Diagram Perkembangan Ekspor Komoditas ${selectedOption} ke Negara ${selected}`
                                }
                            })
                        } else if (selectedType == 'commodities') {
                            xhttp.open("GET", `/gettimeseries/${selectedOption}/${selected}`, true);
                            chart3.updateOptions({
                                title: {
                                    text: `Diagram Perkembangan Ekspor Komoditas ${selected} ke Negara ${selectedOption}`
                                }
                            })
                        }
                        xhttp.send();
                        document.getElementById('scroll').scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }
            },
            noData: {
                text: 'Loading ...'
            },

        };

        var lineOptions = {
            series: [],
            chart: {
                type: 'line',
                stacked: false
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#FF1654", "#247BA0"],
            stroke: {
                curve: 'smooth',
                width: [4, 4]
            },
            plotOptions: {
                bar: {
                    columnWidth: "20%"
                }
            },
            noData: {
                text: 'Klik negara atau komoditas pada grafik di atas'
            },
            yaxis: [{
                    axisTicks: {
                        show: true
                    },
                    axisBorder: {
                        show: true,
                        color: "#FF1654"
                    },
                    labels: {
                        style: {
                            colors: "#FF1654"
                        }
                    },
                    title: {
                        text: "Net Weight (Kg)",
                        style: {
                            color: "#FF1654"
                        }
                    }
                },
                {
                    opposite: true,
                    axisTicks: {
                        show: true
                    },
                    axisBorder: {
                        show: true,
                        color: "#247BA0"
                    },
                    labels: {
                        style: {
                            colors: "#247BA0"
                        }
                    },
                    title: {
                        text: "Net Value (Million US$)",
                        style: {
                            color: "#247BA0"
                        }
                    },
                }
            ],
            xaxis: {
                title: {
                    text: "Bulan"
                }
            },
        };

        function getData(type, param, year, month) {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                let data = JSON.parse(this.responseText);

                totalWeight = getTotal(data, 'net_weight');
                totalValue = getTotal(data, 'net_value');

                chart.updateSeries([{
                    data: data['net_weight']
                }])
                chart.updateOptions({
                    dataLabels: {
                        formatter: function(val, opts) {
                            let percentage = (parseInt(opts.value) * 100 / totalWeight).toFixed(2);
                            if (percentage > 10) {
                                return [opts.w.config.series[0].data[opts.dataPointIndex]['x'], `(${percentage})%`]
                            } else return opts.w.config.series[0].data[opts.dataPointIndex]['x']
                        },
                    }
                })
                chart2.updateOptions({
                    dataLabels: {
                        formatter: function(val, opts) {
                            let percentage = (parseInt(opts.value) * 100 / totalValue).toFixed(2);
                            if (percentage > 10) {
                                return [opts.w.config.series[0].data[opts.dataPointIndex]['x'], `(${percentage})%`]
                            } else return opts.w.config.series[0].data[opts.dataPointIndex]['x']
                        },
                    }
                })
                chart2.updateSeries([{
                    data: data['net_value']
                }])

                $('#DataTable').DataTable().destroy();
                $('#DataTable').DataTable({
                    dom: 'Bfrtip',
                    data: arrangeData(data),
                    order: [
                        [1, 'desc']
                    ],
                    buttons: [
                        'copyHtml5', 'excelHtml5', 'pdfHtml5', 'csvHtml5'
                    ]
                });
                $('.dt-buttons a').addClass('bg-blue-500 text-white p-2 m-1 rounded-sm');

                if (selectedType == 'countries') {
                    $('#charttitle').text(`EKSPOR KOMODITAS ${selectedOption} BERDASARKAN NEGARA TUJUAN DALAM BERAT BERSIH (KG) ${selectedMonth} ${selectedYear}`);
                    $('#chart2title').text(`EKSPOR KOMODITAS ${selectedOption} BERDASARKAN NEGARA TUJUAN DALAM NILAI FOB (JUTA US$) ${selectedMonth} ${selectedYear}`);
                } else {
                    $('#charttitle').text(`EKSPOR KE NEGARA ${selectedOption} BERDASARKAN KOMODITAS DALAM BERAT BERSIH (KG) ${selectedMonth} ${selectedYear}`);
                    $('#chart2title').text(`EKSPOR KE NEGARA ${selectedOption} BERDASARKAN NEGARA TUJUAN DALAM NILAI FOB (JUTA US$) ${selectedMonth} ${selectedYear}`);
                }

            };
            xhttp.open("GET", `/getdata/${type}/${year}/${month}/${param}`, true);
            xhttp.send();
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        var chart2 = new ApexCharts(document.querySelector("#chart2"), options);
        var chart3 = new ApexCharts(document.querySelector("#chart3"), lineOptions);

        chart.render();
        chart2.render();
        chart3.render();

        getData('countries', 'AGAR-AGAR', 2022, 1);
    </script>
</body>

</html>