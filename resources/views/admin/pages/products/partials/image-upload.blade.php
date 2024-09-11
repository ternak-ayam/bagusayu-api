<div class="bg-white p-3 rounded-lg shadow">
    <p>Gambar Produk</p>
    <div class="mt-1">
        <img style="height: 250px; object-fit: cover" class="w-100 rounded-lg" id="image-view"
             src="{{ $imageUrl }}" alt="/">
    </div>
    <input type="file" accept="image/png, image/jpg, image/jpeg" class="d-none form-control" name="photo" id="photo">
    <div class="mt-2">
        <label for="photo" class="btn btn-primary w-100 cursor-pointer">Upload Foto/Logo</label>
    </div>
    <div class="mt-2">
        <p class="text-small mb-0">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang
            diperbolehkan: .JPG .JPEG .PNG
        </p>
        <div class="invalid-feedback"></div>
    </div>
</div>
