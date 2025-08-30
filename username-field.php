<div>
        <label for="username" class="block text-sm/6 font-medium text-gray-100">Username</label>
        <div class="mt-2">
          <input id="username" type="text" name="username" required class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
          <?php if (isset($_SESSION['errors']['username'])): ?>
              <p class="mt-1 text-sm text-red-500">
                <?php echo $_SESSION['errors']['username']; ?>
              </p>
          <?php endif; ?>
        </div>
      </div>