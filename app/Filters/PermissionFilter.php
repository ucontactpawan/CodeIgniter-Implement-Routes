<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class PermissionFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        $loggedInUserId = 3; // NOT allowed to delete

        if ($loggedInUserId != 2) {
            session()->setFlashdata('error', 'Access Denied: You do not have permission to perform this action.');

            return redirect()->to('/students');
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // We don't need to do anything after the controller runs.
    }
}
