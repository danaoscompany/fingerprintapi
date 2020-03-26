<?php

move_uploaded_file($_FILES['file']['tmp_name'], 'temporary_pictures/' . $_FILES['file']['name']);