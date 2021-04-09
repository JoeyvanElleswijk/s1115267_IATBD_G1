<tr> 
    <th>{{$user->name}}</th>
    <th>{{$user->email}}</th>
    <th>{{$user->role}}></th>
    <th>
    <label>Datum</label>
        <input type="date" name="banned_until">
        <a class="create-form__btn" href="/admin/users"><button class="create-form__btn"type="submit">Blokkeren</button></a>
    </th>

 </tr>