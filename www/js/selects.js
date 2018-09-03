/*
 * При полной загрузке документа
 * мы начинаем определять события
 */
// <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
 $(document).ready(function () {
/*
 * На выборе селекта страны — вешаем событие,
 * функция будет брать значение этого селекта
 * и с помощью ajax запроса получать список
 * регионов для вставки в следующий селект
 */
    $('#id_god').change(function () {
/*
 * В переменную country_id положим значение селекта
 * (выбранная страна)
 */
        var id_god = $(this).val();
/*
 * Если значение селекта равно 0,
 * т.е. не выбрана страна, то мы
 * не будем ничего делать
 */
        if (id_god == '0') {
			$('#gruppa').html('<option>- Выберите группу -</option>');
            $('#gruppa').attr('disabled', true);
            return(false);
/*
 * Очищаем второй селект с регионами
 * и блокируем его через атрибут disabled
 * туда мы будем класть результат запроса
 */
        }
        $('#gruppa').attr('disabled', true);
        $('#gruppa').html('<option>загрузка...</option>');
/*
 * url запроса регионов
 */
        var url = 'gruppa.php';
/*
 * GET'овый AJAX запрос
 * подробнее о синтаксисе читайте
 * на сайте http://docs.jquery.com/Ajax/jQuery.get
 * Данные будем кодировать с помощью JSON
 */
        $.get(
            url,
			"id_god=" + id_god,
            function (result) {
                if (result.type == 'error') {
                    alert('error');
                    return(false);
                }
                else {
/*
 * проходимся по пришедшему от бэк-энда массиву циклом
 */
                    var options = '';
                    $(result.gruppas).each(function() {
/*
 * и добавляем в селект по региону
 */
                        options += '<option value="' + $(this).attr('gruppa') + '">' + $(this).attr('gruppa') + '</option>';
                    });                   
                    $('#gruppa').html('<option >- Выберите группу -</option>'+options);
                    $('#gruppa').attr('disabled', false);  					
                }
            },
            "json"
        );
    });
/*
 * Те же действия проделываем с выбором города 
 */
//$('#tip_progr').change(function () {
 //       var region_id = $('#tip_progr :selected').val();
 //       if (region_id == '0') {
  //          $('#praktik').html('<option>- Выберите тип практики -</option>');
  //          $('#praktik').attr('disabled', true);
  //          return(false);
 //       }
  //      $('#praktik').attr('disabled', true);
  //      $('#praktik').html('<option>загрузка...</option>');
   //     var url = 'praktik.php';      
     //   $.get(
      //      url,
        //    "tip_progr=" + tip_progr,
          //  function (result) {
            //    if (result.type == 'error') {
              //      alert('error');
  //                  return(false);
//                }
    //            else {
      //              var options = '';
        //            $(result.citys).each(function() {
          //              options += '<option value="' + $(this).attr('praktik') + '">' + $(this).attr('name') + '</option>';
            //        });
      //              $('#praktik').html('<option>- Выберите тип практики -</option>'+options);
        //            $('#praktik').attr('disabled', false);
			//		 $('#gruppa').html('<option>- Выберите группу -</option>');
              //      $('#gruppa').attr('disabled', true); 
  //              }
    //        },
      //      "json"
   //     );
  //  });
	
});
