<?php
// https://www.ritolab.com/entry/116　を参考にしています

interface UserAggregateInterface {
    public function createIterator();
}

interface UserListIteratorInterface {
    public function hasNext();

    public function next();
}

class UsersListIterator implements UserListIteratorInterface {
    private $users;
    private $position = 0;

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function hasNext()
    {
        return isset($this->users[$this->position]);
    }

    public function next()
    {
        return $this->users[$this->position++];
    }
}

class UsersAggregate implements UserAggregateInterface {
    private $userList;

    public function __construct($user)
    {
        $this->userList = $user;
    }

    public function addUserList($user)
    {
        $this->userList[] = $user;
    }

    public function getUserList()
    {
        return $this->userList;
    }

    public function createIterator()
    {
        return new UsersListIterator($this->userList);
    }
}

class RosterClient {
    private $userIterator;

    function __construct(UserAggregateInterface $user_list)
    {
        $this->userIterator = $user_list->createIterator();
    }

    function getUsers()
    {
        while ($this->userIterator->hasNext()) {
            $user = $this->userIterator->next();
            echo sprintf("%s", $user);
            echo PHP_EOL;
        }
    }
}

$users = ['user', 'user2', 'user3', 'user4'];
$list = new RosterClient(new UsersAggregate($users));
echo $list->getUsers();