点击这个链接重置密码： <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>，或者你可以复制粘贴到地址栏打开！
