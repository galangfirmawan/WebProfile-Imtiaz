@extends('dashboard.template')

@section('title', 'Dashboard | Ma’had Imtiaz')
@section('page_title', 'Dashboard')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endpush

@section('content')

    <!-- PAGE HEADING -->
    <div class="dashboard-page-heading">
        <div>
            <h2>Ringkasan Pendaftaran</h2>
            <p>Informasi dan pemantauan Pendaftaran Santri Baru Ma’had Imtiaz.</p>
        </div>

        <a href="{{ url('/pendaftaran') }}" target="_blank" class="btn-view-registration">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            Lihat Formulir
        </a>
    </div>


    <!-- REGISTRATION SUMMARY -->
    <div class="registration-summary">

        <div class="summary-card">
            <div class="summary-card-top">
                <div class="summary-icon icon-blue">
                    <i class="fa-solid fa-users"></i>
                </div>
                <span class="summary-label">Total Pendaftar</span>
            </div>

            <div class="summary-value">0</div>
            <div class="summary-description">Seluruh calon santri</div>
        </div>

        <div class="summary-card">
            <div class="summary-card-top">
                <div class="summary-icon icon-orange">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <span class="summary-label">Menunggu Verifikasi</span>
            </div>

            <div class="summary-value">0</div>
            <div class="summary-description">Pendaftar belum diperiksa</div>
        </div>

        <div class="summary-card">
            <div class="summary-card-top">
                <div class="summary-icon icon-green">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <span class="summary-label">Terverifikasi</span>
            </div>

            <div class="summary-value">0</div>
            <div class="summary-description">Data telah diverifikasi</div>
        </div>

        <div class="summary-card">
            <div class="summary-card-top">
                <div class="summary-icon icon-red">
                    <i class="fa-solid fa-circle-exclamation"></i>
                </div>
                <span class="summary-label">Perlu Dilengkapi</span>
            </div>

            <div class="summary-value">0</div>
            <div class="summary-description">Data perlu diperbaiki</div>
        </div>

    </div>



    <!-- INDONESIA 3D MAP -->
    <div class="indonesia-map-panel">

        <!-- 3D MAP STAGE -->
        <div class="indonesia-map-stage" id="indonesiaMapStage">

            <!-- LOADING -->
            <div class="indonesia-map-loading" id="indonesiaMapLoading">
                <div class="map-loading-spinner"></div>
                <span>Menyiapkan peta 3D Indonesia...</span>
            </div>

            <!-- ERROR -->
            <div class="indonesia-map-error" id="indonesiaMapError" hidden>
                <i class="fa-solid fa-triangle-exclamation"></i>
                <p>Peta tidak dapat dimuat.</p>
                <button type="button" id="retryIndonesiaMap">Coba Lagi</button>
            </div>

            <!-- THREE JS CANVAS -->
            <canvas id="indonesiaThreeCanvas" class="indonesia-three-canvas"></canvas>

            <!-- LEADER LINE -->
            <svg id="mapLeaderLine" class="map-leader-line" aria-hidden="true">

                <polyline id="mapLeaderPath" points="" fill="none" stroke="#D4AF75" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                </polyline>

                <circle id="mapLeaderDot" cx="0" cy="0" r="4" fill="#D4AF75">
                </circle>

            </svg>

            <!-- FLOATING INFORMATION -->
            <div class="map-callout" id="mapCallout">

                <div class="map-callout-header">
                    <div>
                        <span class="map-callout-label">SEBARAN WILAYAH</span>
                        <h4 id="calloutProvinceName">Jawa Barat</h4>
                    </div>

                    <div class="map-callout-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                </div>

                <div class="map-callout-divider"></div>

                <div class="map-callout-data">

                    <div class="callout-data-item">
                        <span class="callout-data-icon student-callout-icon">
                            <i class="fa-solid fa-user-graduate"></i>
                        </span>

                        <div>
                            <span>Santri</span>
                            <strong id="calloutStudents">125</strong>
                        </div>
                    </div>

                    <div class="callout-data-item">
                        <span class="callout-data-icon alumni-callout-icon">
                            <i class="fa-solid fa-user-check"></i>
                        </span>

                        <div>
                            <span>Alumni</span>
                            <strong id="calloutAlumni">87</strong>
                        </div>
                    </div>

                </div>

                <div class="map-callout-footer">
                    <span>Total keseluruhan</span>
                    <strong id="calloutTotal">212</strong>
                </div>

            </div>

            <!-- MAP LABEL -->
            <div class="map-stage-label">
                <span class="map-stage-label-dot"></span>
                INTERACTIVE 3D MAP
            </div>

            <div class="map-stage-hint">
                <i class="fa-solid fa-mouse"></i>
                Hover untuk melihat detail provinsi
            </div>

        </div>

        <!-- MAP SOURCE -->
        <div class="map-source-note">
            <span>Visualisasi 3D · 38 Provinsi Indonesia</span>
            <span>Data statistik masih berupa dummy</span>
        </div>

    </div>



    <!-- MAIN DASHBOARD GRID -->
    <div class="dashboard-grid">

        <!-- LEFT CONTENT -->
        <div class="dashboard-primary-content">

            <!-- REGISTRATION TABLE -->
            <div class="dashboard-panel">

                <div class="panel-header">
                    <div>
                        <h3>Pendaftar Terbaru</h3>
                        <p>Daftar calon santri yang melakukan pendaftaran.</p>
                    </div>

                    <a href="#" class="panel-link">
                        Lihat Semua
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="registration-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Calon Santri</th>
                                <th>Asal Sekolah</th>
                                <th>Tanggal Daftar</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td colspan="5">
                                    <div class="table-empty-state">
                                        <div class="empty-icon">
                                            <i class="fa-solid fa-folder-open"></i>
                                        </div>

                                        <h4>Belum Ada Data Pendaftaran</h4>
                                        <p>Data calon santri yang mendaftar akan ditampilkan di sini.</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>


            <!-- REGISTRATION INFORMATION -->
            <div class="dashboard-panel registration-information-panel">

                <div class="panel-header">
                    <div>
                        <h3>Informasi Pendaftaran</h3>
                        <p>Informasi umum penerimaan santri baru.</p>
                    </div>
                </div>

                <div class="registration-information-list">

                    <div class="information-item">
                        <div class="information-icon">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>

                        <div class="information-detail">
                            <span>Tahun Ajaran</span>
                            <strong>2027–2028</strong>
                        </div>
                    </div>

                    <div class="information-item">
                        <div class="information-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        <div class="information-detail">
                            <span>Jenjang Pendidikan</span>
                            <strong>SMP</strong>
                        </div>
                    </div>

                    <div class="information-item">
                        <div class="information-icon">
                            <i class="fa-solid fa-user-group"></i>
                        </div>

                        <div class="information-detail">
                            <span>Ketentuan Santri</span>
                            <strong>Khusus Putra</strong>
                        </div>
                    </div>

                    <div class="information-item">
                        <div class="information-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div class="information-detail">
                            <span>Lokasi Ma’had</span>
                            <strong>Megamendung, Bogor</strong>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <!-- RIGHT CONTENT -->
        <div class="dashboard-secondary-content">

            <!-- REGISTRATION STATUS -->
            <div class="dashboard-panel registration-status-panel">

                <div class="panel-header">
                    <div>
                        <h3>Status Pendaftaran</h3>
                        <p>Ringkasan proses penerimaan.</p>
                    </div>
                </div>

                <div class="status-overview">
                    <div class="status-overview-number">0</div>
                    <span>Total Calon Santri</span>

                    <div class="status-progress">
                        <div class="status-progress-bar"></div>
                    </div>

                    <div class="status-progress-label">
                        <span>Progres verifikasi</span>
                        <strong>0%</strong>
                    </div>
                </div>

                <div class="status-list">

                    <div class="status-list-item">
                        <span class="status-dot dot-orange"></span>
                        <span>Menunggu verifikasi</span>
                        <strong>0</strong>
                    </div>

                    <div class="status-list-item">
                        <span class="status-dot dot-green"></span>
                        <span>Terverifikasi</span>
                        <strong>0</strong>
                    </div>

                    <div class="status-list-item">
                        <span class="status-dot dot-red"></span>
                        <span>Perlu dilengkapi</span>
                        <strong>0</strong>
                    </div>

                </div>

            </div>


            <!-- EDUCATION PROGRAM -->
            <div class="dashboard-panel program-panel">

                <div class="panel-header">
                    <div>
                        <h3>Program Pendidikan</h3>
                        <p>Program utama Ma’had Imtiaz.</p>
                    </div>
                </div>

                <div class="program-list">

                    <div class="program-list-item">
                        <span class="program-number">01</span>
                        <span>Tahsin dan Tahfizh Al-Qur’an</span>
                    </div>

                    <div class="program-list-item">
                        <span class="program-number">02</span>
                        <span>Bahasa Arab dan Ulumus Syar’i</span>
                    </div>

                    <div class="program-list-item">
                        <span class="program-number">03</span>
                        <span>Pembinaan Adab dan Akhlak</span>
                    </div>

                    <div class="program-list-item">
                        <span class="program-number">04</span>
                        <span>Hifdzul Mutun</span>
                    </div>

                    <div class="program-list-item">
                        <span class="program-number">05</span>
                        <span>HIMMAH</span>
                    </div>

                </div>

            </div>


            <!-- QUICK ACCESS -->
            <div class="dashboard-quick-access">

                <div class="quick-access-icon">
                    <i class="fa-solid fa-file-circle-plus"></i>
                </div>

                <div class="quick-access-content">
                    <h4>Formulir Pendaftaran</h4>
                    <p>Buka halaman formulir pendaftaran calon santri baru.</p>
                    <a href="{{ url('/pendaftaran') }}" target="_blank">
                        Buka Formulir
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>




    @push('scripts')
        <script type="module">
            import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js';

            document.addEventListener('DOMContentLoaded', function() {

                /* =====================================================
                   ELEMENTS
                ===================================================== */

                const stage = document.getElementById('indonesiaMapStage');
                const canvas = document.getElementById('indonesiaThreeCanvas');

                if (!stage || !canvas) return;

                const loading = document.getElementById('indonesiaMapLoading');
                const errorElement = document.getElementById('indonesiaMapError');
                const retryButton = document.getElementById('retryIndonesiaMap');

                const callout = document.getElementById('mapCallout');
                const leaderLine = document.getElementById('mapLeaderLine');
                const leaderPath = document.getElementById('mapLeaderPath');
                const leaderDot = document.getElementById('mapLeaderDot');

                const provinceNameElement = document.getElementById('calloutProvinceName');
                const studentsElement = document.getElementById('calloutStudents');
                const alumniElement = document.getElementById('calloutAlumni');
                const totalElement = document.getElementById('calloutTotal');

                if (
                    !loading ||
                    !errorElement ||
                    !callout ||
                    !leaderLine ||
                    !leaderPath ||
                    !leaderDot ||
                    !provinceNameElement ||
                    !studentsElement ||
                    !alumniElement ||
                    !totalElement
                ) {
                    console.error('Elemen HTML peta Indonesia belum lengkap.');
                    return;
                }

                /* =====================================================
                   GLOBAL VARIABLES
                ===================================================== */

                let renderer = null;
                let scene = null;
                let camera = null;

                let animationFrame = null;
                let provinceGroups = [];
                let activeProvince = null;

                let stageWidth = 0;
                let stageHeight = 0;

                let isInitialized = false;

                const numberFormat = new Intl.NumberFormat('id-ID');

                const raycaster = new THREE.Raycaster();
                const pointer = new THREE.Vector2();

                const clock = new THREE.Clock();

                /* =====================================================
                   PROVINCE DATA
                ===================================================== */

                const provinceData = {
                    "Aceh": {
                        students: 18,
                        alumni: 12
                    },
                    "Sumatera Utara": {
                        students: 32,
                        alumni: 21
                    },
                    "Sumatera Barat": {
                        students: 15,
                        alumni: 9
                    },
                    "Riau": {
                        students: 12,
                        alumni: 8
                    },
                    "Kepulauan Riau": {
                        students: 8,
                        alumni: 5
                    },
                    "Jambi": {
                        students: 10,
                        alumni: 7
                    },
                    "Sumatera Selatan": {
                        students: 16,
                        alumni: 11
                    },
                    "Kepulauan Bangka Belitung": {
                        students: 5,
                        alumni: 3
                    },
                    "Bengkulu": {
                        students: 6,
                        alumni: 4
                    },
                    "Lampung": {
                        students: 20,
                        alumni: 14
                    },

                    "DKI Jakarta": {
                        students: 45,
                        alumni: 28
                    },
                    "Banten": {
                        students: 38,
                        alumni: 25
                    },
                    "Jawa Barat": {
                        students: 125,
                        alumni: 87
                    },
                    "Jawa Tengah": {
                        students: 65,
                        alumni: 42
                    },
                    "DI Yogyakarta": {
                        students: 28,
                        alumni: 19
                    },
                    "Jawa Timur": {
                        students: 75,
                        alumni: 53
                    },

                    "Bali": {
                        students: 9,
                        alumni: 6
                    },
                    "Nusa Tenggara Barat": {
                        students: 13,
                        alumni: 8
                    },
                    "Nusa Tenggara Timur": {
                        students: 4,
                        alumni: 2
                    },

                    "Kalimantan Barat": {
                        students: 11,
                        alumni: 7
                    },
                    "Kalimantan Tengah": {
                        students: 7,
                        alumni: 5
                    },
                    "Kalimantan Selatan": {
                        students: 14,
                        alumni: 9
                    },
                    "Kalimantan Timur": {
                        students: 12,
                        alumni: 8
                    },
                    "Kalimantan Utara": {
                        students: 3,
                        alumni: 2
                    },

                    "Sulawesi Utara": {
                        students: 5,
                        alumni: 3
                    },
                    "Gorontalo": {
                        students: 4,
                        alumni: 2
                    },
                    "Sulawesi Tengah": {
                        students: 8,
                        alumni: 5
                    },
                    "Sulawesi Barat": {
                        students: 4,
                        alumni: 3
                    },
                    "Sulawesi Selatan": {
                        students: 22,
                        alumni: 15
                    },
                    "Sulawesi Tenggara": {
                        students: 7,
                        alumni: 4
                    },

                    "Maluku": {
                        students: 5,
                        alumni: 3
                    },
                    "Maluku Utara": {
                        students: 4,
                        alumni: 2
                    },

                    "Papua": {
                        students: 6,
                        alumni: 4
                    },
                    "Papua Barat": {
                        students: 3,
                        alumni: 2
                    },
                    "Papua Selatan": {
                        students: 2,
                        alumni: 1
                    },
                    "Papua Tengah": {
                        students: 3,
                        alumni: 2
                    },
                    "Papua Pegunungan": {
                        students: 2,
                        alumni: 1
                    },
                    "Papua Barat Daya": {
                        students: 3,
                        alumni: 2
                    }
                };

                /* =====================================================
                   COORDINATE CONVERSION
                ===================================================== */

                function convertCoordinate(coordinate) {

                    const longitude = coordinate[0];
                    const latitude = coordinate[1];

                    return {
                        x: (longitude - 118) * 0.22,
                        y: (latitude + 2) * 0.34
                    };

                }

                /* =====================================================
                   CREATE PROVINCE SHAPE
                ===================================================== */

                function createProvinceShape(ring) {

                    const shape = new THREE.Shape();

                    ring.forEach((coordinate, index) => {

                        const point = convertCoordinate(coordinate);

                        if (index === 0) {
                            shape.moveTo(point.x, point.y);
                        } else {
                            shape.lineTo(point.x, point.y);
                        }

                    });

                    shape.closePath();

                    return shape;

                }

                /* =====================================================
                   CREATE 3D PROVINCE
                ===================================================== */

                function createProvince(feature, mapGroup, index) {

                    const provinceName =
                        feature.properties?.PROVINSI ||
                        feature.properties?.provinsi ||
                        feature.properties?.NAME_1 ||
                        feature.properties?.name ||
                        'Provinsi tidak diketahui';

                    const data = provinceData[provinceName] || {
                        students: 0,
                        alumni: 0
                    };

                    const provinceGroup = new THREE.Group();

                    provinceGroup.userData.provinceName = provinceName;
                    provinceGroup.userData.data = data;
                    provinceGroup.userData.targetHeight = 0;

                    let polygons = [];

                    if (feature.geometry.type === 'Polygon') {
                        polygons = [feature.geometry.coordinates];
                    } else if (feature.geometry.type === 'MultiPolygon') {
                        polygons = feature.geometry.coordinates;
                    }

                    const colorPalette = [
                        0x527CA8,
                        0x486F9A,
                        0x5C83AD,
                        0x416B96,
                        0x6389B0
                    ];

                    const topMaterial = new THREE.MeshStandardMaterial({
                        color: colorPalette[index % colorPalette.length],
                        roughness: 0.7,
                        metalness: 0.05
                    });

                    const sideMaterial = new THREE.MeshStandardMaterial({
                        color: 0x203B5D,
                        roughness: 0.8,
                        metalness: 0.02
                    });

                    let largestRing = null;
                    let largestRingLength = 0;

                    polygons.forEach(polygon => {

                        const outerRing = polygon[0];

                        if (!outerRing || outerRing.length < 3) return;

                        if (outerRing.length > largestRingLength) {
                            largestRing = outerRing;
                            largestRingLength = outerRing.length;
                        }

                        const shape = createProvinceShape(outerRing);

                        const geometry = new THREE.ExtrudeGeometry(shape, {
                            depth: 0.13,
                            bevelEnabled: true,
                            bevelSegments: 2,
                            steps: 1,
                            bevelSize: 0.025,
                            bevelThickness: 0.025,
                            curveSegments: 2
                        });

                        geometry.rotateX(-Math.PI / 2);

                        const mesh = new THREE.Mesh(
                            geometry,
                            [sideMaterial, topMaterial]
                        );

                        mesh.castShadow = true;
                        mesh.receiveShadow = true;

                        mesh.userData.provinceGroup = provinceGroup;

                        provinceGroup.add(mesh);

                    });

                    /* Anchor untuk garis informasi */

                    if (largestRing) {

                        let longitudeTotal = 0;
                        let latitudeTotal = 0;

                        largestRing.forEach(coordinate => {
                            longitudeTotal += coordinate[0];
                            latitudeTotal += coordinate[1];
                        });

                        const centerLongitude =
                            longitudeTotal / largestRing.length;

                        const centerLatitude =
                            latitudeTotal / largestRing.length;

                        const anchor = convertCoordinate([
                            centerLongitude,
                            centerLatitude
                        ]);

                        provinceGroup.userData.anchor = new THREE.Vector3(
                            anchor.x,
                            0.18,
                            -anchor.y
                        );

                    }

                    mapGroup.add(provinceGroup);
                    provinceGroups.push(provinceGroup);

                }

                /* =====================================================
                   SHOW PROVINCE INFORMATION
                ===================================================== */

                function showProvinceInfo(provinceGroup) {

                    if (!provinceGroup) return;

                    const provinceName = provinceGroup.userData.provinceName;
                    const data = provinceGroup.userData.data;

                    provinceNameElement.textContent = provinceName;

                    studentsElement.textContent =
                        numberFormat.format(data.students);

                    alumniElement.textContent =
                        numberFormat.format(data.alumni);

                    totalElement.textContent =
                        numberFormat.format(data.students + data.alumni);

                    /* Samakan class dengan CSS */

                    callout.classList.add('active');
                    leaderLine.classList.add('active');

                }

                /* =====================================================
                   HIDE PROVINCE INFORMATION
                ===================================================== */

                function hideProvinceInfo() {

                    callout.classList.remove('active');
                    leaderLine.classList.remove('active');

                    leaderPath.setAttribute('points', '');

                }

                /* =====================================================
                   UPDATE CALLOUT POSITION
                ===================================================== */

                function updateCalloutPosition(provinceGroup) {

                    if (
                        !provinceGroup ||
                        !provinceGroup.userData.anchor ||
                        !camera
                    ) {
                        return;
                    }

                    const anchor = provinceGroup.userData.anchor.clone();

                    provinceGroup.localToWorld(anchor);

                    anchor.project(camera);

                    /* Koordinat 3D ke koordinat layar */

                    const anchorX =
                        (anchor.x * 0.5 + 0.5) * stageWidth;

                    const anchorY =
                        (-anchor.y * 0.5 + 0.5) * stageHeight;

                    const cardWidth = callout.offsetWidth || 205;
                    const cardHeight = callout.offsetHeight || 125;

                    const showRight = anchorX < stageWidth * 0.55;

                    let cardX = showRight ?
                        anchorX + 75 :
                        anchorX - cardWidth - 75;

                    let cardY = anchorY - cardHeight - 35;

                    /* Batas posisi agar tidak keluar dari stage */

                    cardX = Math.max(
                        10,
                        Math.min(cardX, stageWidth - cardWidth - 10)
                    );

                    cardY = Math.max(
                        45,
                        Math.min(cardY, stageHeight - cardHeight - 35)
                    );

                    callout.style.left = cardX + 'px';
                    callout.style.top = cardY + 'px';

                    /* Titik akhir garis */

                    const targetX = showRight ?
                        cardX :
                        cardX + cardWidth;

                    const targetY = cardY + cardHeight * 0.55;

                    const elbowX = showRight ?
                        anchorX + 35 :
                        anchorX - 35;

                    leaderPath.setAttribute(
                        'points',
                        [
                            `${anchorX},${anchorY}`,
                            `${elbowX},${anchorY}`,
                            `${targetX},${targetY}`
                        ].join(' ')
                    );

                    leaderDot.setAttribute('cx', anchorX);
                    leaderDot.setAttribute('cy', anchorY);

                }

                /* =====================================================
                   SET ACTIVE PROVINCE
                ===================================================== */

                function setActiveProvince(provinceGroup) {

                    if (activeProvince === provinceGroup) return;

                    activeProvince = provinceGroup;

                    provinceGroups.forEach(group => {

                        group.userData.targetHeight =
                            group === provinceGroup ? 0.38 : 0;

                    });

                    if (provinceGroup) {

                        showProvinceInfo(provinceGroup);

                    } else {

                        hideProvinceInfo();

                    }

                }

                /* =====================================================
                   DETECT PROVINCE
                ===================================================== */

                function detectProvince(event) {

                    if (!camera || !renderer) return;

                    const rect = canvas.getBoundingClientRect();

                    if (!rect.width || !rect.height) return;

                    pointer.x =
                        ((event.clientX - rect.left) / rect.width) * 2 - 1;

                    pointer.y = -((event.clientY - rect.top) / rect.height) * 2 + 1;

                    raycaster.setFromCamera(pointer, camera);

                    const allMeshes = [];

                    provinceGroups.forEach(group => {

                        group.children.forEach(mesh => {
                            allMeshes.push(mesh);
                        });

                    });

                    const intersections = raycaster.intersectObjects(
                        allMeshes,
                        false
                    );

                    if (intersections.length > 0) {

                        const provinceGroup =
                            intersections[0].object.userData.provinceGroup;

                        setActiveProvince(provinceGroup);

                    } else {

                        setActiveProvince(null);

                    }

                }

                /* =====================================================
                   POINTER EVENTS
                ===================================================== */

                canvas.addEventListener('pointermove', detectProvince);

                canvas.addEventListener('pointerleave', function() {
                    setActiveProvince(null);
                });

                canvas.addEventListener('pointerdown', detectProvince);

                /* =====================================================
                   ANIMATION LOOP
                ===================================================== */

                function animate() {

                    animationFrame = requestAnimationFrame(animate);

                    const delta = Math.min(clock.getDelta(), 0.05);

                    provinceGroups.forEach(group => {

                        const target = group.userData.targetHeight || 0;

                        group.position.y = THREE.MathUtils.damp(
                            group.position.y,
                            target,
                            9,
                            delta
                        );

                    });

                    if (activeProvince) {
                        updateCalloutPosition(activeProvince);
                    }

                    renderer.render(scene, camera);

                }

                /* =====================================================
                   RESIZE MAP
                ===================================================== */

                function resizeMap() {

                    if (!renderer || !camera) return;

                    stageWidth = stage.clientWidth;
                    stageHeight = stage.clientHeight;

                    if (!stageWidth || !stageHeight) return;

                    camera.aspect = stageWidth / stageHeight;

                    camera.updateProjectionMatrix();

                    renderer.setSize(stageWidth, stageHeight);

                    renderer.setPixelRatio(
                        Math.min(window.devicePixelRatio, 2)
                    );

                    if (activeProvince) {
                        updateCalloutPosition(activeProvince);
                    }

                }

                /* =====================================================
                   INITIALIZE MAP
                ===================================================== */

                async function initializeMap() {

                    if (isInitialized) return;

                    loading.hidden = false;
                    errorElement.hidden = true;

                    try {

                        /* Ambil GeoJSON */

                        const response = await fetch(
                            'https://raw.githubusercontent.com/denyherianto/indonesia-geojson-topojson-maps-with-38-provinces/main/GeoJSON/indonesia-38-provinces.geojson'
                        );

                        if (!response.ok) {
                            throw new Error('GeoJSON tidak dapat diakses.');
                        }

                        const geojson = await response.json();

                        if (!geojson.features || !geojson.features.length) {
                            throw new Error('Data provinsi tidak ditemukan.');
                        }

                        /* Scene */

                        scene = new THREE.Scene();

                        /* Camera */

                        stageWidth = stage.clientWidth;
                        stageHeight = stage.clientHeight;

                        if (!stageWidth || !stageHeight) {
                            throw new Error('Ukuran area peta tidak tersedia.');
                        }

                        camera = new THREE.PerspectiveCamera(
                            37,
                            stageWidth / stageHeight,
                            0.1,
                            100
                        );

                        camera.position.set(0, 7, 10);
                        camera.lookAt(0, 0, 0);

                        /* Renderer */

                        renderer = new THREE.WebGLRenderer({
                            canvas: canvas,
                            alpha: true,
                            antialias: true
                        });

                        renderer.setPixelRatio(
                            Math.min(window.devicePixelRatio, 2)
                        );

                        renderer.setSize(stageWidth, stageHeight);

                        renderer.shadowMap.enabled = true;
                        renderer.shadowMap.type = THREE.PCFSoftShadowMap;

                        renderer.outputColorSpace = THREE.SRGBColorSpace;

                        renderer.toneMapping = THREE.ACESFilmicToneMapping;
                        renderer.toneMappingExposure = 1.2;

                        /* Lighting */

                        const ambientLight = new THREE.AmbientLight(
                            0xffffff,
                            1.5
                        );

                        scene.add(ambientLight);

                        const directionalLight = new THREE.DirectionalLight(
                            0xffffff,
                            2.2
                        );

                        directionalLight.position.set(-5, 10, 7);
                        directionalLight.castShadow = true;

                        directionalLight.shadow.mapSize.set(2048, 2048);

                        directionalLight.shadow.camera.left = -12;
                        directionalLight.shadow.camera.right = 12;
                        directionalLight.shadow.camera.top = 10;
                        directionalLight.shadow.camera.bottom = -10;

                        directionalLight.shadow.bias = -0.0002;

                        scene.add(directionalLight);

                        /* Map Group */

                        const mapGroup = new THREE.Group();

                        scene.add(mapGroup);

                        /* Buat seluruh provinsi */

                        provinceGroups = [];

                        geojson.features.forEach((feature, index) => {
                            createProvince(feature, mapGroup, index);
                        });

                        /* Center Map */

                        const mapBounds = new THREE.Box3().setFromObject(mapGroup);

                        const mapCenter = mapBounds.getCenter(
                            new THREE.Vector3()
                        );

                        mapGroup.position.x = -mapCenter.x;
                        mapGroup.position.z = -mapCenter.z;

                        mapGroup.scale.set(1.35, 1.35, 1.35);

                        /* Tandai sudah berhasil diinisialisasi */

                        isInitialized = true;

                        loading.hidden = true;

                        animate();

                    } catch (error) {

                        console.error('Indonesia 3D Map:', error);

                        loading.hidden = true;
                        errorElement.hidden = false;

                    }

                }

                /* =====================================================
                   RETRY BUTTON
                ===================================================== */

                if (retryButton) {

                    retryButton.addEventListener('click', function() {

                        if (animationFrame) {
                            cancelAnimationFrame(animationFrame);
                        }

                        if (renderer) {
                            renderer.dispose();
                            renderer = null;
                        }

                        if (scene) {

                            scene.traverse(object => {

                                if (object.geometry) {
                                    object.geometry.dispose();
                                }

                                if (object.material) {

                                    const materials = Array.isArray(object.material) ?
                                        object.material :
                                        [object.material];

                                    materials.forEach(material => {
                                        material.dispose();
                                    });

                                }

                            });

                            scene = null;

                        }

                        provinceGroups = [];
                        activeProvince = null;

                        isInitialized = false;

                        hideProvinceInfo();

                        initializeMap();

                    });

                }

                /* =====================================================
                   RESIZE OBSERVER
                ===================================================== */

                if ('ResizeObserver' in window) {

                    const resizeObserver = new ResizeObserver(resizeMap);

                    resizeObserver.observe(stage);

                } else {

                    window.addEventListener('resize', resizeMap);

                }

                /* =====================================================
                   START
                ===================================================== */

                initializeMap();

            });
        </script>
    @endpush




@endsection
