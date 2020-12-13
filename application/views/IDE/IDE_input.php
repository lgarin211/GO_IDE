<div class="container">
    <form action="<?= base_url('/user/input_ide') ?>" method="post">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Judul</span>
            <input type="text" name="judul" required class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Lokasi</span>
            <select name="lokasi" required id="" class="form-control">
                <? foreach ($daerah->provinsi as $key => $value) : ?>
                    <option value="<?= $value->nama ?>"><?= $value->nama ?></option>
                <? endforeach ?>
            </select>
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Deskrip</span>
            <textarea name="Deskripsi" required class="form-control" id="" cols="" rows="12"></textarea>
        </div>
        <button type="submit" class="btn btn-primary form-control">kirim</button>
    </form>
</div>
</div>