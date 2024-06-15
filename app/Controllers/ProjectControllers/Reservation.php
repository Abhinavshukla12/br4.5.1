<?php

namespace App\Controllers\ProjectControllers;

use App\Models\Reservation as ReservationModel;
use CodeIgniter\Controller;

class Reservation extends Controller
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('project/login');
        }

        $reservationModel = new ReservationModel();
        $reservations = $reservationModel->where('user_id', $session->get('id'))->findAll();

        return view('ProjectViews/Reservation/index', ['reservations' => $reservations]);
    }

    public function create()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('project/login');
        }

        return view('ProjectViews/Reservation/create');
    }

    public function store()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('project/login');
        }

        $reservationModel = new ReservationModel();

        $data = [
            'user_id'           => $session->get('id'),
            'train_number'      => $this->request->getVar('train_number'),
            'departure_station' => $this->request->getVar('departure_station'),
            'arrival_station'   => $this->request->getVar('arrival_station'),
            'departure_date'    => $this->request->getVar('departure_date'),
            'seat_number'       => $this->request->getVar('seat_number'),
        ];

        $reservationModel->save($data);

        return redirect()->to('project/reservation');
    }

    public function delete($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('project/login');
        }

        $reservationModel = new ReservationModel();
        $reservationModel->delete($id);

        return redirect()->to('project/reservation');
    }

    public function view($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('project/login');
        }

        $reservationModel = new ReservationModel();
        $reservation = $reservationModel->find($id);

        return view('ProjectViews/Reservation/view', ['reservation' => $reservation]);
    }
}
