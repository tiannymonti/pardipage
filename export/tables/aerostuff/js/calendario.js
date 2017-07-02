      $(document).ready(function() {
        //search and draw table function
        drawTable = function (){
          if (typeof (myTable) !== 'undefined') {
            $.fn.dataTable.ext.search.push(function( settings, data, dataIndex ) {
              
              if (typeof picker_obj === 'undefined'){
                startdate = moment().subtract(1, 'month').format('YYYY-MM-DD H:mm');
                enddate = moment().format('YYYY-MM-DD H:mm');
              }
              else{
                startdate = picker_obj.startDate.format('YYYY-MM-DD H:mm');
                enddate = picker_obj.endDate.format('YYYY-MM-DD H:mm');
              }

              dateMin = startdate.substring(0,4) + startdate.substring(5,7) + startdate.substring(8,10) + startdate.substring(11,12)+startdate.substring(13,15);
              dateMax = enddate.substring(0,4) + enddate.substring(5,7) + enddate.substring(8,10) + enddate.substring(11,12)+enddate.substring(13,15);
              
              if($("input#id").is(':checked')){
               var date_column = data[1] || 0; // use data for the date/time column
              }
              else
              {
                var date_column = data[0] || 0; // use data for the date/time column
              }

              date_column = date_column.substring(0,4) + date_column.substring(5,7) + date_column.substring(8,10) + date_column.substring(11,12)+date_column.substring(13,15);
              
              if ( dateMin === "" && dateMax === "" )
              {
                return true;
              }
              else if ( dateMin <= date_column && dateMax === "")
              {
                return true;
              }
              else if ( dateMax >= date_column && dateMin === "")
              {
                return true;
              }
              else if (dateMin <= date_column && dateMax >= date_column)
              {
                return true;
              }
              return false;
            });
            myTable.draw();
          }
        }
        
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#calendario span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        startdate = moment().subtract(1, 'month').format('YYYY-MM-DD H:mm');
        enddate = moment().format('YYYY-MM-DD H:mm');
        drawTable();

        var optionSet1 = {
          startDate: moment().subtract(1, 'month'),
          endDate: moment(),
          minDate: '05/05/2016',
          
          dateLimit: {
            days: 365
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: true,
          timePickerIncrement: 10,
          timePicker12Hour: false,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(7, 'days'), moment()],
            'Last 30 Days': [moment().subtract(1, 'month'), moment()],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'right',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };

        $('#calendario span').html(moment().subtract(1, 'month').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#calendario').daterangepicker(optionSet1, cb);

        $('#calendario').on('apply.daterangepicker', function(ev, picker) {
        });

        $('#calendario').on('hide.daterangepicker', function(ev, picker) {
          console.log("hide event fired");
          picker_obj = picker;
          //searching the date range insinde the table
          drawTable();
        });

        $('#options1').click(function() {
          $('#calendario').data('daterangepicker').setOptions(optionSet1, cb);
        });

        $('#options2').click(function() {
          $('#calendario').data('daterangepicker').setOptions(optionSet2, cb);
        });

        $('#destroy').click(function() {
          $('#calendario').data('daterangepicker').remove();
        });

        // Event listener to the two range filtering inputs to redraw on input
        $('#calendario').on('show.daterangepicker', function() {
          console.log("show event fired");
          
        });
        
        $('#calendario').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
      });
