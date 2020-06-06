<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\User;

class ReportController extends Controller
{
        public function TopBook()
        {
            $books = Book::withCount('borrowed')
                ->orderBy('borrowed_count', 'desc')
                ->paginate(env('PAGINATION_ADMIN'));
            return view('admin.report.top-book',[
                'books' => $books,
            ]);
        }

        public function TopUser()
        {
            $users = User::withCount('borrow')
                ->orderBy('borrow_count', 'desc')
                ->paginate(env('PAGINATION_ADMIN'));
            return view('admin.report.top-user',[
                'users' => $users,
            ]);
        }
}
