const verifyJwtToken = async () => {
    try {
        const isTokenValid = await axios.post('/verifyToken', {}, {
            headers: {
                Authorization: `Bearer ${localStorage.getItem('access_token')}`
            }
        });
        return isTokenValid.data.status /* returns 200 if token is valid */
    } catch (error) {
        console.error(`something went wrong ${error}`);
    }
}