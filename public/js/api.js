function api() {
    $.ajax({
        url: "/get-provinsi",
        type: "GET",
        success: function (hasil_result) {
            console.log("prov", hasil_result);
            var option_prov = "<option>-- Pilih Provinsi --</option>";
            hasil_result.forEach((element) => {
                option_prov += `<option value="${element.province_id}">${element.province}</option>`;
            });
            $(".prov-data").html(option_prov);
        },
    });

    $(document).on("change", ".prov-data", function () {
        var prov_sel = $(".prov-data option:selected").val();
        console.log("pilih prov", prov_sel);
        $.ajax({
            url: "/get-kota",
            data: { prov_id: prov_sel },
            type: "GET",
            success: function (hasil_result) {
                console.log("kota", hasil_result);
                var option_prov = "<option>-- Pilih Kota --</option>";
                hasil_result.forEach((element) => {
                    option_prov += `<option value="${element.city_id}">${element.city_name}</option>`;
                });
                $(".kota-data").html(option_prov);
            },
        });
    });
}
