<?php namespace App\Http\Middleware;

use Sentinel;
use Closure;

class Authenticate {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (Sentinel::guest())
		{
			if ($request->ajax())
			{
				return response('δ��Ȩ.', 401);
			}
			else
			{
				return redirect()->guest('/login');
			}
		}

		return $next($request);
	}

}
