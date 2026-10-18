<div class="laporan-card">
    <div class="laporan-header">
        <h3>{{ $laporan->nama_pelapor }}</h3>

        @if ($laporan->tinggi_genangan < 30)
            <span class="status waspada">Waspada</span>
        @elseif ($laporan->tinggi_genangan <= 70)
            <span class="status siaga">Siaga</span>
        @else
            <span class="status awas">Awas</span>
        @endif
    </div>

    <p>
        <strong>Lokasi:</strong>
        {{ $laporan->lokasi }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $laporan->tinggi_genangan }} cm
    </p>

    <p>
        <strong>Tanggal Kejadian:</strong>
        {{ $laporan->tanggal_kejadian }}
    </p>
</div>