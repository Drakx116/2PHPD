<label for="input-user-id">
    <input onchange="setUserId()" type="number" min="1" id="input-user-id" value="5">
</label><br>

<button onclick="getUserById(userId)">Find </button><br>
<button onclick="storeUser()"> Add </button>

<script type="application/javascript" src="public/assets/js/get.js"></script>
<script type="application/javascript" src="public/assets/js/post.js"></script>

<script type="application/javascript">
  let userId = 1;
  function setUserId() {
      userId = document.getElementById('input-user-id').value;
  }
</script>