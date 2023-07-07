

$(document).ready(function() {
    $('#TabelHome').DataTable({
      searching: true,
      paging: true,
      ordering: true,
      info: true,
      lengthChange: true,
      pageLength: 10,
      language: {
        search: "Search:",
        lengthMenu: "Show _MENU_ entries",
        info: "Showing _START_ to _END_ of _TOTAL_ entries",
        paginate: {
          first: "First",
          last: "Last",
          next: "Next",
          previous: "Previous"
        }
      }
    });
  });