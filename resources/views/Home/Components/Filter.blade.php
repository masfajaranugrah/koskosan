<div class="container bg-tr">
    <div class="d-flex gap-3 align-items-center justify-content-center flex-column flex-sm-row">
        <div>
            <div class="d-flex gap-3 justify-content-center align-items-center">
        <div>
            <select id="filterKategori" class="form-select form-select-lg" aria-label="Large select example">
                <option value="Semua Kategori" selected>Nama Kos</option>
                <option value="all">all</option>

                @foreach ($kategoris as $kat)
                    <option value="{{ $kat->id}}">{{ $kat->nama_kos }}</option>
                @endforeach
            </select>
        </div>
    </div>
        </div>
        <div>
             <div class="d-flex gap-3 justify-content-center align-items-center">
        <div>
            <select id="filterSatuan" class="form-select form-select-lg  " aria-label="Large select example">
                <option value="Semua Kategori" selected>Kampus Terdekat</option>
                <option value="all">all</option>

                @foreach ($satuan as $kat)
                    <option value="{{ $kat->id }}">{{ $kat->fakultas }}</option>
                @endforeach
            </select>
        </div>
    </div>
        </div>
        <div>
            <div class="d-flex gap-3 justify-content-center align-items-center">
       <div>
           <select id="filterJenis" class="form-select form-select-lg " aria-label="Large select example">
               <option value="Semua Kategori" selected>Type Kos</option>
               <option value="all">all</option>

               @foreach ($gender as $kat)
                   <option value="{{ $kat->id }}">{{ $kat->gender }}</option>
               @endforeach
           </select>
       </div>
   </div>
       </div>
    </div>



</div>
