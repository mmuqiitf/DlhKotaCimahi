<!-- Modal -->


<div class="modal fade" id="modalExcell" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content custom__modal">
            <div class="modal-body custom__modal__content custom__modal__content__excell ">


                <div class="alert alert-danger" role="alert">
                    Jika ingin menggunakan fitur ini silahkan download template excel dibawah ini.
                </div>

                <a href="/template_excell/BODEksisting.xlsx" download="Template Input BOD Eksisting">
                    <button class="button__excell button__download__template" type="button">Download Template</button>
                </a>



                <input class="form-control <?= ($validation->hasError('file_excel')) ? 'is-invalid' : ''; ?>"
                    name="file_excel" type="file" accept=".xlsx, .xls">
                <small class="text-danger justify-content-end">
                    <?= $validation->getError('file_excel'); ?>
                </small>
                <div class="button__container__modal">
                    <button class="button__excell"><i class="bi bi-check-lg icon__confirm" type="submit"></i>Import
                        Now</button>
                    <button type="button" class="button__excell" data-bs-dismiss="modal"><i
                            class="bi bi-x-lg icon__dismiss"></i>Tidak</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>