public function authorize() {
    return true; // Cho phép mọi người dùng gửi request này
}

public function rules() {
    return [
        'title' => 'required|string|min:5|max:255',
        'content' => 'required|string|min:10',
    ];
}

public function messages() {
    return [
        'title.required' => 'Tiêu đề không được để trống.',
        'title.min' => 'Tiêu đề phải có ít nhất 5 ký tự.',
        'content.required' => 'Nội dung không được để trống.',
        'content.min' => 'Nội dung phải có ít nhất 10 ký tự.',
    ];
}