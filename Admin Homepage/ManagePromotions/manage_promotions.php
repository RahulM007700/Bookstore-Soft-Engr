<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Manage Promotions</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"
    />
  </head>
  <body>
    <div class="container mb-3 mt-3">
      <table
        class="table table-striped table-bordered"
        id="mydatatable"
        style="border-radius: 4px"
      >
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Promotion ID</th>
            <th>Promotion Amount</th>
            <th>Status</th>
            <th>ISBN</th>
            <th>Expiration Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            //$i = 0;
            for($i = 0; $i < sizeof($_SESSION['Promotions']); $i++):
          ?>
          <tr>
            <td><?= $i; ?></td>
            <td><?php echo $_SESSION['Promotions'][$i]['Name'];?></td>
            <td><?php echo $_SESSION['Promotions'][$i]['Promotion_ID'];?></td>
            <td><?php echo $_SESSION['Promotions'][$i]['Discount'];?></td>
            <td><?php echo $_SESSION['Promotions'][$i]['Status'];?></td>
            <td><?php echo $_SESSION['Promotions'][$i]['ISBN'];?></td>
            <td><?php echo $_SESSION['Promotions'][$i]['Exp_Date'];?></td>
            <td id="suspension">
              <select onchange="changeSelected();">
                <option>Active</option>
                <option>Inactive</option>
                <option>Delete</option>
              </select>
            </td>
          </tr>
          <?php endfor;?> 
        </tbody>
      </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $("#mydatatable").DataTable();

      var table = document.getElementById("mydatatable");

      table.find("tr").each(function () {
        var $tds = $(this).find("td");
        //var number = $tds.eq(0).text();
        //var name = $tds.eq(1).text();
        //var accountID = $tds.eq(2).text();
        var role = $tds.eq(3).text();
        var status = $tds.eq(4).text();
        var action = $tds.eq(5).text();
        // do something with it
        if (role.value == "User") {
          action.html(
            "<select><option>Suspend</option><option>Unsuspend</option></select>"
          );
        } else if (role.value == "Employee") {
          action.html("<button>Promote</button>");
        } else if (role.value == "Admin") {
          action.html("<button>Demote</button>");
        }
      });

      function changeSelected() {
        var select = document.getElementById("suspension").value;
        if (select.value == "Suspended") {
          status.html(
            "<p><span class='status text-warning'>&bull;</span> Inactive</p>"
          );
        } else if (select.value == "Unsuspended") {
          status.html(
            "<p><span class='status text-success'>&bull;</span> Active</p>"
          );
        }
      }
    </script>
  </body>
</html>
