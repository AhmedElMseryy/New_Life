 <!-- [Page Specific JS] start -->
 <script src="{{ asset('admin-assets') }}/js/plugins/apexcharts.min.js"></script>
 <script src="{{ asset('admin-assets') }}/js/plugins/jsvectormap.min.js"></script>
 <script src="{{ asset('admin-assets') }}/js/plugins/world.js"></script>
 <script src="{{ asset('admin-assets') }}/js/plugins/world-merc.js"></script>
 <script src="{{ asset('admin-assets') }}/js/pages/dashboard-default.js"></script>
 <!-- [Page Specific JS] end -->
 <!-- Required Js -->
 <script src="{{ asset('admin-assets') }}/js/plugins/popper.min.js"></script>
 <script src="{{ asset('admin-assets') }}/js/plugins/simplebar.min.js"></script>
 <script src="{{ asset('admin-assets') }}/js/plugins/bootstrap.min.js"></script>
 <script src="{{ asset('admin-assets') }}/js/fonts/custom-font.js"></script>
 <script src="{{ asset('admin-assets') }}/js/pcoded.js"></script>
 <script src="{{ asset('admin-assets') }}/js/plugins/feather.min.js"></script>


 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


 <script>
     layout_change('dark');
 </script>


 <script>
     layout_sidebar_change('dark');
 </script>


 <script>
     change_box_container('false');
 </script>


 <script>
     layout_caption_change('true');
 </script>


 <script>
     layout_rtl_change('false');
 </script>


 <script>
     preset_change("preset-1");
 </script>


 <script>
     //============================ CREATE 
     //  window.addEventListener('createModalToggle', event => {
     //      var myModal = new bootstrap.Modal(document.getElementById('createModal'));
     //      myModal.toggle();
     //  });

     //============================ EDIT
     //  window.addEventListener('editModalToggle', event => {
     //      var myModal = new bootstrap.Modal(document.getElementById('editModal'));
     //      myModal.toggle();
     //  });


     //  window.addEventListener('editModalToggle', event => {
     //      $('#editModal').modal('toggle');
     //  });

     //  window.addEventListener('editModalToggle', () => {
     //      const modal = document.getElementById('editModal');
     //      if (modal.classList.contains('show')) {
     //          $('#editModal').modal('hide');
     //      } else {
     //          $('#editModal').modal('show');
     //      }
     //  });


     //============================ DELETE
     //  window.addEventListener('deleteModalToggle', event => {
     //      var myModal = new bootstrap.Modal(document.getElementById('deleteModal'));
     //      myModal.toggle();
     //  });
     //============================ SHOW
     //  window.addEventListener('showModalToggle', event => {
     //      var myModal = new bootstrap.Modal(document.getElementById('showModal'));
     //      myModal.toggle();
     //  });

     //***************************************************************************************************************
     //============================ CREATE
     window.addEventListener('createModalToggle', event => {
         $('#createModal').modal('toggle');
     })

     //============================ EDIT
     window.addEventListener('editModalToggle', event => {
         $('#editModal').modal('toggle');
     })

     //============================ DELETE
     window.addEventListener('deleteModalToggle', event => {
         $('#deleteModal').modal('toggle');
     })

     //============================ SHOW
     window.addEventListener('showModalToggle', event => {
         $('#showModal').modal('toggle');
     })
     //***************************************************************************************************************
 </script>
