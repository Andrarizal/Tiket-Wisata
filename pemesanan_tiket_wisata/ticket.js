    //Variable kelas
    var museum = 10000;
    var pantai = 20000;
    var taman_nasional = 50000;

    var wisata_choice_price = 0; //pilihan kelas
    var pengunjung_dewasa = 0;
    var total_price_pengunjung_dewasa = 0;
    var harga_anak = 0;
    var harga_dewasa = 0; 
    var total_harga = 0;
    var satu_harga = 0;     

    //Fungsi submit handler digunakan untuk mentriger button submit
    function onSubmit(event){
        hitung();
        setTimeout(function () {
          var id = document.querySelector("#no_id").value;
          if (id.length < 16) {
            alert("No identitas harus 16 digit");
          } else {
            document.pemesanan.submit();
          }
        }, 1000);
    }
    //Untuk menghitung harga jumlah dewasa dan anak
    function hitung() {
      var price = document.getElementById("harga_text");
      var total = document.getElementById("total_text");

      var price_input = document.getElementById("harga");
      var total_input = document.getElementById("total");

      var total_dewasa = document.querySelector('#pengunjung_dewasa').value;
      var total_anak = document.querySelector('#pengunjung_anak').value;
      var wisata = document.querySelector('#tempat').value;

 

//percabangan 
      switch (wisata) {
        case 'museum XYZ':
          wisata_choice_price = museum
          break;

        case 'pantai':
          wisata_choice_price = pantai
          break;

        case 'taman nasional':
          wisata_choice_price = taman_nasional
          break;
      
        default:
          wisata_choice_price = 0
          break;
      }

      if (total_anak != "" || total_anak != 0) {
        harga_dewasa = total_dewasa * wisata_choice_price
        harga_anak = (wisata_choice_price * 0.5) * total_anak
        
        total_harga = harga_dewasa + harga_anak

        satu_harga = wisata_choice_price
        total.innerHTML = rupiah(satu_harga, "Rp. ")

        total_input.value = satu_harga
        price_input.value = satu_harga

        price.innerHTML = rupiah(total_harga, "Rp. ")
      } else {
        harga_dewasa = total_dewasa * wisata_choice_price
        total_harga = harga_dewasa + harga_anak
        satu_harga = wisata_choice_price
        total.innerHTML = rupiah(satu_harga, "Rp. ")

        total_input.value = satu_harga
        price_input.value = satu_harga

        price.innerHTML = rupiah(total_harga, "Rp. ")
      }
    }
    //Untuk menghitung diskon anak berdasarkan kelas
    function diskon_anak(jml,tempat){
      total_price_anak = jml * tempat; 
      return (harga_anak = total_price_anak - total_price_anak * 0.5); // 50% jadi 0,5 
    }

    //Untuk mengcancel pesanan
    function cancel(){
        document.pemesanan.reset();
    }

    //digunakan untuk mengecek format rupiah
    function rupiah(angka, prefix){
      var number_string = angka.toString().replace(/[^,\d]/g, ''),
      split  = number_string.split(','),
      sisa   = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);
 
      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
 
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }